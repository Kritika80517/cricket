<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use App\Helpers\FileHelper;


class NotificationController extends Controller
{
    public function index(){
        $notification = Notification::latest()->get();
        return view('admin.notification.index', compact('notification'));
    }

    public function create(){
        $users = User::where('role', 'user' )->get();
        return view('admin.notification.create', compact('users'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        $message = new Notification();
        $message->user_ids = json_encode($request->user_ids);
        $message->title = $request->title;
        $message->message = $request->message;
        $message->send_at = $request->send_at;
        $message->file = FileHelper::image_upload('assets/admin/img/notification/', 'png', $request->file('image'));
        $message->save();
        return redirect('admin/notifications')->with('success', 'Notification created successfully');
    }

    public function edit($id){
        $users = User::where('role', 'user' )->get();
        $message =Notification::where('id', $id)->first();
        return view('admin.notification.edit', compact('message','users'));
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'message' => 'required',
        ]);
        //dd(request()->all());
        $message = Notification::where('id', $request->id)->first();
        $message->user_ids = json_encode($request->user_ids);
        $message->title = $request->title;
        $message->message = $request->message;
        $message->send_at = $request->send_at;
        $message->file = FileHelper::image_upload('assets/admin/img/notification/', 'png', $request->file('image'));
        $message->save();
        return redirect('admin/notifications')->with('success', 'Notification updated successfully');
    }

    public static function send_push_notif_to_device($data)
    {
        
        $tokens = Device::all();
        $key = env("FIREBASE_SERVER_KEY");

        $url = "https://fcm.googleapis.com/fcm/send";
        foreach ($tokens as $fcm_token)
        {
            $header = array(
                "authorization: key=" . $key . "", 
                "content-type: application/json"
            );
            $postdata = '{
                "to" : "' . $fcm_token->device_token . '",
                "mutable-content": "true",
                "data" : {
                    "title":"' . $data['title'] . '",
                    "body" : "' . $data['message'] . '",
                    "is_read": 0
                  },
                 "notification" : {
                    "title" :"' . $data['title'] . '",
                    "body" : "' . $data['message'] . '",
                    "is_read": 0,
                    "icon" : "new",
                    "sound" : "default"
                  }
            }';
    
            $ch = curl_init();
            $timeout = 120;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    
            // Get URL content
            $result = curl_exec($ch);
            // close handle to release resources
            curl_close($ch);
        }

        return redirect("admin/notifications")->with(['message' => 'Notifications sent successfully', "status"]);
    }
    
}

