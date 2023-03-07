<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMedia;

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
            $data = [
                'mediafile'=>$imagePath,
            ]; 
            $update = UserMedia::find($request->user_id)->update($data); 
            if($update){
                $response['success'] = true;
                $response['message'] = 'Success! Record Updated Successfully.';
            }else{
                $response['success'] = false;
                $response['message'] = 'Error! Record Not Updated.';
            }
            return $response;
        }
}
?>