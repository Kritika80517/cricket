<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\Models\MatchNotification;
use \App\Models\User;
use Illuminate\Support\Facades\Http;
use Google\Client as Google_Client;
class SendMatchNotification extends Command
{
    protected $signature = 'push:send-match-notification';
    protected $description = 'Command description';

    public function handle()
    {
        // Fetch notifications to be sent
        $notifications = MatchNotification::where('send_at', '<=', now())->where('status', 0)->get();
        foreach ($notifications as $notification) {
            $data = [
                'title' => $notification->title,
                'message' => $notification->message,
            ];

            $this->sendPushNotification($data, $notification);
        }
    }

    private function sendPushNotification($data, $notification)
    {
        $tokens = User::whereNotNull('fcm_token')->pluck('fcm_token');
        $url = 'https://fcm.googleapis.com/v1/projects/cricketwickets/messages:send';
        $headers = [
            'Authorization' => 'Bearer ' . $this->getAccessToken(),
            'Content-Type' => 'application/json',
        ];
    
        foreach ($tokens as $token) {
            $message = [
                'message' => [
                    'token' => $token,
                    'notification' => [
                        'title' => $notification['title'],
                        'body' => $notification['message'],
                    ],
                    'data' => [
                        'title' => $notification['title'],
                        'body' => $notification['message'],
                        'is_read' => '0',
                    ],
                    'android' => [
                        'notification' => [
                            'sound' => 'default',
                            'icon' => 'new',
                        ],
                    ],
                    'apns' => [
                        'payload' => [
                            'aps' => [
                                'sound' => 'default',
                            ],
                        ],
                    ],
                ],
            ];
    
            $response = Http::withHeaders($headers)->post($url, $message);
    
            if ($response->successful()) {
                $this->info('Push notification sent successfully.');
                MatchNotification::where('id', $notification->id)->update(['status' => 1]);
            } else {
                $this->error('Failed to send push notification: ' . $response->json('error.message'));
            }
        }
    }
    
    private function getAccessToken()
    {
        $client = new Google_Client();
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . env('GOOGLE_APPLICATION_CREDENTIALS'));
        $client->useApplicationDefaultCredentials();
        $client->addScope('https://www.googleapis.com/auth/firebase.messaging');

        return $client->fetchAccessTokenWithAssertion()['access_token'];
    }

}
