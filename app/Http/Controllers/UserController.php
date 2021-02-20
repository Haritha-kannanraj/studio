<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req){
      $user = User::where(['email'=>$req->email])->first();
      if(!$user || !Hash::check($req->password,$user->password)){
        return "Incorrect Password or UserID";
      }
      else{
        $req->session()->put('user',$user);
        return redirect('/createEvent');
      }
    }
    function loginp(){
      return redirect('/login');
    }

    function back(){
      return redirect('/');
    }

    function signup(Request $req){
      //return $req->input();
      $user = new User;
      $user->fname=$req->fname;
      $user->lname=$req->lname;
      $user->email=$req->email;
      $user->mobile=$req->mobile;
      $user->password=Hash::make($req->password);
      $user->save();
      return redirect('/login');
    }
}
