<?php

namespace App\Http\Controllers;
use App\Models\Qualification;

use Illuminate\Http\Request;

class QualificationController extends Controller
{



    public function addqualification(Request $request){

        $image = $request->file('document');
            
        $teaser_image = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/img');
        
        $image->move($destinationPath,  $teaser_image );

        try{
            $user_id=$request['user_id']; 
            $info=Qualification::where('user_id',$user_id)->first();
            if($info){
           $update=$info->update(['Stream'=>$request['Stream'],
           'user_id'=>$request['user_id'], 
           'University'=> $request['University'], 
           'Exprienceoffline'=>$request['Exprienceoffline'], 
           'Exprienceonline'=> $request['Exprienceonline'],
           'Specialachievements'=>$request['Specialachievements'], 
           'Anyotherdetails'=>$request['Anyotherdetails'], 
           'AboutProject'=> $request['AboutProject'], 
           'document'=>  $teaser_image, 
           ]
            );
           if($update){
            return 'success';
           }
           else{
            return 'error';
           }

            }
           $update = Qualification::updateOrCreate(['Stream'=>$request['Stream'],
           'user_id'=>$request['user_id'], 
           'University'=> $request['University'], 
           'Exprienceoffline'=>$request['Exprienceoffline'], 
           'Exprienceonline'=> $request['Exprienceonline'],
           'Specialachievements'=>$request['Specialachievements'], 
           'Anyotherdetails'=>$request['Anyotherdetails'], 
           'AboutProject'=> $request['AboutProject'], 
           'document'=> $teaser_image, 
           ]
            
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
