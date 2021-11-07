<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=> 'required|exists:admins,email',
            'password' => 'required|min:5|max:30',
        ],[
            'email.exists' => 'This email does not exist',
        ]);
        $user = Admin::where('email', $request->email)->first();
        $creds = $request->only('email', 'password');
        // dd($creds);
        if(Auth::guard('admin')->attempt($creds)){
            $request->session()->put('admin_type',$user->admin_type);
            // dd($value);
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->with('loginFailed','Incorrect Credentials');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        if(session()->has('admin_type')){
            session()->pull('admin_type');
            
        }
        return redirect()->route('admin.login');
        
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
