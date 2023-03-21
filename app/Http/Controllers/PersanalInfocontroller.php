<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersanalInfo;

class PersanalInfocontroller extends Controller
{
    public function addinfo(Request $request){



        try{
            $user_id=$request['user_id']; 
            $info=PersanalInfo::where('user_id',$user_id)->first();
            if($info){
           $update=$info->update(['f_name'=>$request['f_name'],
           'user_id'=>$request['user_id'], 
           'f_name'=> $request['f_name'], 
           'l_name'=>$request['l_name'], 
           'email'=> $request['email'],
           'number'=>$request['number'], 
           'dob'=>$request['dob'], 
           'gender'=> $request['gender'], 
           'address'=> $request['address'], 
           'country'=>$request['country'],
           'state'=>  $request['state'], 
           'city'=> $request['city'], 
           'pincode'=> $request['pincode'], 
           'area'=> $request['area']]
            );
           if($update){
            return 'success';
           }
           else{
            return 'error';
           }

            }
           $update = PersanalInfo::updateOrCreate([ 'f_name'=>$request['f_name'],
           'user_id'=>$request['user_id'], 
           'f_name'=> $request['f_name'], 
           'l_name'=>$request['l_name'], 
           'email'=> $request['email'],
           'number'=>$request['number'], 
           'dob'=>$request['dob'], 
           'gender'=> $request['gender'], 
           'address'=> $request['address'], 
           'country'=>$request['country'],
           'state'=>  $request['state'], 
           'city'=> $request['city'], 
           'pincode'=> $request['pincode'], 
           'area'=> $request['area']]
            
           );
           if($update){
            return 'success';
           }
           else{
            return 'error';
           }


return $request;
        }
        catch (exception $e){
return $e;



        }



    }
}
