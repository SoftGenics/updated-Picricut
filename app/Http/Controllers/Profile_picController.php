<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMedia;
use App\Models\Profile_pics;
use Session;
class Profile_picController extends Controller
{
    public function mediafile(Request $request, $id){

        //    $validatedData = $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
     
        //      ]);
     
             $name = $request->file('image')->getClientOriginalName();
     
             $path = $request->file('image')->store('image');
            
          $user = new UserMedia;
          $user->user_id=$id;
          $user->title=$request->input('title');
          $user->mediafile=$name;
          $user->about_media=$request->input('about_media');


       $result=$user->save();
           
              if($result){
               return  $result;
              }
              else{
              return "Not inserted data";
              }
           return  "not Success";
           }
           public function update_image(Request $request){
            $img_name = 'img_'.time().'.'.$request->profile->getClientOriginalExtension();
            $request->profile->move(public_path('img/'), $img_name);
            $imagePath = 'img/'.$img_name;
            // $data = [
            //     'mediafile'=>$imagePath,
            // ]; 
            $users=session()->get('users');
            $id=$users['id'];
            //$userf = new ;
           

           $update = Profile_pics::updateOrCreate(
                ['user_id' => $id],
                ['image' => $imagePath]
            );
            if($update){
                $response['success'] = true;
                $response['message'] = 'Success! Record Updated Successfully.';
                Session::put('userimage',$imagePath);
            }else{
                $response['success'] = false;
                $response['message'] = 'Error! Record Not Updated.';
            }
            return $response;
        }
}
?>