<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.profile');
    }

    public function deativate($id){
        User::where('id', $id)->update(['status' => 'closed']);
        Auth::logout();
        return redirect('/login')->with('deactivate', 'Account has been deactivated');
    }
}
