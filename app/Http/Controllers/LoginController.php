<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile_pics;
class LoginController extends Controller
{
    use RememberMeExpiration;

    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('pages/signin');
    }

    public function login(Request $request)
    { 
        $username=$request->input('username');
        $password=$request->input('password');
        $user=User::where('username',$username)->first();
        if( $user){
        if($user->emailvery==true){
            $pass=$user->password;
           
            if(hash_equals($pass, crypt($password,  $pass))){
                session()->put('users', $user);

 session()->put('userlevel', 1);
 $ids=$user->id;
                $userimg=Profile_pics::where('user_id',$ids)->first();
                if($userimg)
                {
                   $img=$userimg->image;
                   session()->put('userimage',$img);
                }
                alert()->message('Login successfully');
                return redirect()->intended('my-notification/success');
                
        }
        else{
            alert()->message('Email and password does not match');
            return redirect()->intended('my-notification/error');
        }
        
            
    
        }
        else{
            alert()->message('User does verify');
            return redirect()->intended('my-notification/warning');
        }
          
    }
    else{
        alert()->message('User Does not exist');
        return redirect()->intended('my-notification/not');
    }

}
}
