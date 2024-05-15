<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
Use Hash;

class ResetPasswordController extends Controller
{
    public function reset_password_request(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required',
        ]);
        if($validator->fails()){
           return response()->json(['message' => 'The provided credentials are incorrect.'($validator)], 403);
        }

        $user = User::where(['email' => $request['email']])->first();

        if(isset($user)){
            $token = rand(1000,9999);
            DB::table('password_reset_tokens')->updateOrInsert(
                ['email' => $request['email']],
                ['token' => $token, 'created_at' => now()]
            );

            try{
                Mail::to($user['email'])->send(new \App\Mail\PasswordResetMail($token));
            }catch (\Exception $e){
                return response()->json(['errors' => [['code' => 'config-missing', 'message' => 'Email configuration issue']
                ]], 400);
            }
            return response()->json(['message' => 'Email sent successfully.'], 200);
        }
        return response()->json(['errors' => [['code' => 'not-found', 'message' => 'Customer not found.']]], 400);
    }

    public function reset_password_submit(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'reset_token' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        if($validator->fails()){
           return response()->json(['message' => 'The provided credentials are incorrect.'($validator)], 403);
        }

        $data= DB::table('password_reset_tokens')->where(['email' => $request['email']])
        ->where(['token' => $request['reset_token']])->first();

        if(isset($data)){
            if($request['password'] == $request['confirm_password']){
                $user = User::where(['email' => $request['email']])->first();
                $user->password=Hash::make(($request['confirm_password']));
                $user->save();

                DB::table('password_reset_tokens')
                ->where(['email' => $request['email']])
                ->where(['token' => $request['reset_token']])->first();

                return response()->json(['message' => 'Password change successfully.'], 200);
            }
            return response()->json(['errors' => [['code' => 'mis-match', 'message' => 'Password did not mtach to confirm password.']]], 401);
        }
        return response()->json(['errors' => [['code' => 'invaild', 'message' => 'Invaild token.']]], 400);

    }
}
