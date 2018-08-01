<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
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
  public function postRegister(Request $request){
    $user = new User;
    $user->name= $request->username;
    $user->email= $request->email;
    $user->password = bcrypt($request->password);
    $user->address = $request->address;
    $user->is_admin = 0;
    $user->save();
    return redirect()->route('login')->with('register','Đăng kí thành công!!');
  }

  //xu ly logout
  public function logout(){
    Auth::logout();
    Session::forget('user');
    return redirect()->route('index');
  }
}
