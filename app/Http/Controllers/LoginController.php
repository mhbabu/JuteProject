<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function UsersLogin(Request $request){
        $this->validate($request, [
            'user_email' => 'required|max:50',
            'password' => 'required'
        ]);

        if(Auth::attempt(['user_email'=> $request->get('user_email'), 'password'=> $request->get('password')])){
            return redirect('dashboard');
        }
        return redirect()->back();
    }

    public function logout(){
       Auth::logout();
       return redirect('/');
    }
}
