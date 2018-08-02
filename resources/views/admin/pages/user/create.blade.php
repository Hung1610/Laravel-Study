@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small style="font-size:50%;">Thêm</small>
                </h1>
                <hr>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
              @if(count($errors)>0)
                <div class="alert alert-danger" role="alert">
                  @foreach($errors->all() as $key)
                      {{$key}}<br>
                  @endforeach
                </div>
              @endif
              @if(Session::get('thongbao'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('thongbao')}}
                </div>
              @endif
                <form action="{{route($model . '.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tên User</label>
                        <input class="form-control" name="name" placeholder="Nhập Tên User" required min="3"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập Password" required/>
                    </div>
                    <div class="form-group">
                        <label>Retype Password</label>
                        <input type="password" class="form-control" name="passwordcp" placeholder="Nhập Lại Password" required />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Nhập Email" required />
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ</label>
                        <input type="text" class="form-control" name="address" placeholder="Nhập Địa Chỉ"required />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@if(Session::get('thongbao'))
<div class="alert alert-danger" style="top: -10px;" role="alert">
  {{Session::get('thongbao')}}
</div>
@endif
@endsection
