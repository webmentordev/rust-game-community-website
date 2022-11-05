<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class SignupController extends Controller
{
    public function index(){
        return view('auth.signup');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            "name"=>"required|max:255",
            "username"=>"required|max:255",
            "email"=>"required|max:255|email",
            "password"=>"required|confirmed|min:8",
            "code"=>"required",
        ]);

        if($request->code == "QW4HD-DQCRG"){
            $user = User::create([
                "name"=>$request->name,
                "username"=>$request->username,
                "email"=>$request->email,
                "password"=>Hash::make($request->password)
            ]);
            
            Auth::attempt([
                'email' => $request->email, 
                'password' => $request->password
            ]);
    
            event(new Registered($user));
    
            return redirect()->route('profile');
        }
    }
}
