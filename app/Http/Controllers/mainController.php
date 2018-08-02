<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function getTrangChu(){
      return view('frontend.index');
    }
    public function getGioiThieu(){
      return view('frontend.pages.gioithieu');
    }
    public function getAdmin(){
      return view('admin.layouts.app');
    }
}
