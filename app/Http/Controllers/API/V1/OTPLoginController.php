<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OTPLoginController extends Controller
{
    // public function requestOtp(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|exists:users,email',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['message' => 'Invalid email address.'], 400);
    //     }

    //     $user = User::where('email', $request->email)->first();

    //     if ($user) {
    //         $otp = rand(1000, 9999);
    //         $expiresAt = now()->addMinutes(10);

    //         DB::table('otp_logins')->updateOrInsert(
    //             ['email' => $request->email],
    //             ['otp' => $otp, 'expires_at' => $expiresAt, 'created_at' => now()]
    //         );

    //         try {
    //             Mail::to($user->email)->send(new \App\Mail\otpLoginMail($otp));
    //         } catch (\Exception $e) {
    //             return response()->json(['errors' => [['code' => 'config-missing', 'message' => $e->getMessage()]]], 400);
    //         }

    //         return response()->json(['message' => 'OTP sent to your email.'], 200);
    //     }

    //     return response()->json(['message' => 'OTP sent to your email.'], 200);
    // }

    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|digits:4',
        ]);

        if ($validator->fails()) {
            return response()->json(['message' => 'Invalid request.'], 400);
        }

        $user = User::where('email', $request->email)->first();

        $otpRecord = DB::table('otp_logins')
            ->where('email', $request->email)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otpRecord) {
            return response()->json(['message' => 'Invalid or expired OTP.'], 422);
        }

        DB::table('otp_logins')->where('email', $request->email)->delete();

        $token = $user->createToken('AuthToken')->plainTextToken;

        return response()->json([
            'message' => 'OTP verified. User logged in successfully.',
            'user' => $user,
            'token' => $token,
        ], 200);
    }
}
