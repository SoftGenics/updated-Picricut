<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('home.index');
    }
    public function myNotification($type)
    {
        switch ($type) {
            case 'uploadmedia':
                alert()->message('media file uploaded');
                return redirect()->intended('media');
                break;
            case 'message':
                alert()->message('Message send success');
                return redirect()->intended('/sprofile');
                break;
            case 'updatesuccess':
                return redirect()->intended('/dashboard');
                break;
            case 'not':
                alert()->info('User Does not exist');
                 return redirect('/login');
                break;

                
                case 'loginsuccess':
                    alert()->success('Login Sucsessfully')->autoclose(3500);
                   return redirect()->intended('/dashboard');
                    break;
            case 'success':
                alert()->success('Register Sucsessfully Please Select Category')->autoclose(3500);
               return redirect()->intended('/category');
                break;
            case 'error':
                alert()->error('Invilide User');
                return redirect('/login');
                break;
            case 'warning':
                alert()->warning('Email does not verify');
                return redirect('/login');
                break;
            default:
                # code...
                break;
        }


       
    }
}
