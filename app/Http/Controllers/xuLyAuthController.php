<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
class xuLyAuthController extends Controller
{
  public function getLogin(){
    return view('pages.login');
  }
  //xu ly login
  public function postLogin(Request $request){
    $username = $request->username;
    $password = $request->password;
    if(Auth::attempt(['name'=>$username,'password'=>$password])){
      Session::put('user',Auth::user());
      return redirect()->route('index');
    }
    else {
      return redirect()->route('login')->with('loi','Sai Tên Hoặc Mật Khẩu!!!!!');
    }
  }
  public function getRegister(){
    return view('pages.register');
  }
  public function postRegister(){
    //...
  }
}
