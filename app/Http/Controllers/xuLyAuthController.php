<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class xuLyAuthController extends Controller
{
  public function getLogin(){
    return view('pages.login');
  }
  public function postLogin(Request $request){
    //....
    echo $request->username.$request->password;
  }
  public function getRegister(){
    return view('pages.register');
  }
  public function postRegister(){
    //...
  }
}
