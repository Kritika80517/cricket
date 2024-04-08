<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class SendPushNotifications extends Command
{
    protected $signature = 'push:send';
    protected $description = 'Send push notifications to devices';

    public function handle()
    {
        // Fetch notifications to be sent
        $notifications = Notification::where('send_at', '<=', now())->where('status', 0)->get();

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
        $tokens = User::whereIn('id', json_decode($notification->user_ids, true))->pluck('fcm_token')->toArray();
        $key = env('FIREBASE_SERVER_KEY');
        $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = [
            'Authorization' => 'key=' . $key,
            'Content-Type' => 'application/json',
        ];

        $body = [
            'registration_ids' => $tokens,
            'notification' => [
                'title' => $data['title'],
                'body' => $data['message'],
                'mutable-content' => true,
                'icon' => 'new',
                'sound' => 'default',
            ],
            'data' => [
                'title' => $data['title'],
                'body' => $data['message'],
                'is_read' => 0,
            ],
        ];

        $response = Http::withHeaders($headers)->post($url, $body);

        if ($response->successful()) {
            $this->info('Push notification sent successfully.');
            Notification::where('id', $notification->id)->update(['status' => 1]);
        } else {
            $this->error('Failed to send push notification: ' . $response->status());
        }
    }
}
