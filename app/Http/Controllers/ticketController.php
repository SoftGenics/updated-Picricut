<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\ticket;


class ticketController extends Controller
{
    public function ticket(Request $request){

       $result= ticket::create($request->all());
       return redirect()->intended('my-notification/message');
    }
}
