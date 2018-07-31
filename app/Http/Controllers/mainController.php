<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function getTrangChu(){
      return view('index');
    }
    public function login(){
      return view('pages.login');
    }
}
