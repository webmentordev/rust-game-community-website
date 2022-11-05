<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailController extends Controller
{
    public function index(){
        return view('auth.verify-email');
    }

    public function verify(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Verification Email Sent! Expire in 5 Minutes');
    }


    public function email(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect()->route('profile');
    }
}
