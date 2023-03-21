<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\srequirement;

use Session;

class srequirementController extends Controller
{
    public function addrequirment(Request $request){
    $result= srequirement::create($request->all());
    if($result){ return redirect()->intended('my-notification/message');}
    else{
       return redirect()->intended('my-notification/error');
    }
}
public function deleterequirement(Request $request, $id){

    $result= srequirement::where('id',$id)->first();
    $delete=$result->delete();
    return redirect()->intended('apostnew');
}
}