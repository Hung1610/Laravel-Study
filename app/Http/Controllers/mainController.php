<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class mainController extends Controller
{
    public function __construct(Content $model){
      return $this->model=$model;
    }
    public function getTrangChu(){
      return view('frontend.index',['data_content'=>$this->model::paginate(10)]);
    }
    public function getGioiThieu(){
      return view('frontend.pages.gioithieu');
    }
    public function getAdmin(){
      return view('admin.layouts.app');
    }
    public function getPageDetail($alias,$id){
      return view('frontend.pages.contentdetail',['data_content' => $this->model::find($id)]);
    }
}
