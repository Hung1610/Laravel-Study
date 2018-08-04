<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use Auth;
use Session;
use App\User;

class xuLyAuthController extends Controller
{
  public function getLogin(){
    return view('frontend.pages.login');
  }
  //xu ly login
  public function postLogin(Request $request){
    $username = $request->username;
    $password = $request->password;
    if(Auth::attempt(['name'=>$username,'password'=>$password])){
      return redirect()->route('index');
    }
    else {
      return redirect()->route('login')->with('loi','Sai Tên Hoặc Mật Khẩu!!!!!');
    }
  }


  public function getRegister(){
    return view('frontend.pages.register');
  }
  public function postRegister(registerRequest $request){
    //them validate();
    $validate = $request->validated();
    $user = new User;
    $user->name= $request->name;
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
