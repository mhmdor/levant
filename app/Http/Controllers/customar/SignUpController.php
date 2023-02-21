<?php

namespace App\Http\Controllers\customar;

use App\Http\Controllers\Controller;
use App\Models\Customar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index(){
        return view("customar.register");
    }

    public function create(Request $request){

        $is_email=Customar::where("email",$request->email)->first();
        if($is_email){
            echo 2;
        }else{
        $customar=new Customar();
        $image=$request->file("profile");
        $new_image = $image->hashName();
        $image->move(public_path( "upload/user_images/"), $image->hashName() );

        $fname=$request->fname;
        $lname=$request->lname;
        $email=$request->email;
        $phone=$request->phone;
        $email=$request->email;
        $password=$request->password;

        $customar->fname=$fname;
        $customar->phone=$phone;
        $customar->lname=$lname;
        $customar->email=$email;
        $customar->phone = $request->phone;
       
        $customar->password=Hash::make($password);
        $customar->image=$new_image;
        $result=$customar->save();
        if($result){
            echo 1;
        }else{
            echo 0;
        }
        }
        
    }
}