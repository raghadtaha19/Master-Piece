<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;
use App\Models\User;

class EmailController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard_layouts.send-email-for-all');
    }
    public function sendEmailToAllUsers(Request $request)
    {
        $emailContent = $request->message;
        $emailSubject = $request->subject;

        $users = User::select('user_name', 'email')->get();
        
        foreach ($users as $user) {
            Mail::to($user->email)->send(new CustomEmail($emailSubject, $emailContent, $user->name));
        }

        return redirect()->back()->with('success', 'Email sent to all users successfully.');
    }
}
