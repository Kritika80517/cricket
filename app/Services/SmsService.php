<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    public function sendSms($phoneNumber, $otp)
    {
        $url = env('SMSFRESH_API_URL');
        $user = env('SMSFRESH_USER');
        $password = env('SMSFRESH_PASSWORD');
        $senderId = env('SMSFRESH_SENDER_ID');
        $message = "Your OTP code is: $otp";

        $response = Http::get($url, [
            'authkey' => $user,
            'mobiles' => $phoneNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => '4', // Route 4 is for transactional messages
            'country' => '91', // Assuming the country code is 91 for India
        ]);

        return $response->successful();
    }
}
