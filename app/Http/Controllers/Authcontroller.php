<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class Authcontroller extends Controller
{
    //
     function register(){
        return view('layout.nregister');
     }
     function dashboard(){
      return view('layout.dashboard');
   }
     
     function registerpost(Request $request){
      $request->validate([ 
         "fullname" => "required", 
         "email" => "required", 
         "password" => "required" 
         ]); 
         $user = new User(); 
         $user->name = $request->fullname; 
         $user->email = $request->email; 
         $user->password = $request->password; 
         if($user->save()){ 
         return redirect(route("login"))->with("success", "user create successfully"); 
         } 
         return redirect(route("register"))->with("errors", "faild");

     }
     
      //
       function login(){
          return view('layout.login');
       }
       function loginpost(Request  $request){
         $request->validate([
         
      'email'=>'required', 
      'password'=>'required' 
      ]); 
      $credential = $request->only('email','password'); 
      if(Auth::attempt($credential)){ 
      return redirect(route('dashboard'))->with("success", "you are logged in"); 
      } 
      return redirect(route('login'))->with("error", "try agian");


       }
}
