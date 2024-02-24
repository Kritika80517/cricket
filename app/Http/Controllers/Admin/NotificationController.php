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
        $message->user_ids = $request->user_ids;
        $message->title = $request->title;
        $message->message = $request->message;
        $message->send_at = $request->send_at;
        $message->file = FileHelper::image_upload('assets/admin/img/notification/', 'png', $request->file('image'));
        $message->save();
        return redirect('admin/notifications');
    }
}

