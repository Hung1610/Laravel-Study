@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
{{ $data_table->links() }}
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Danh Sách Người Dùng</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Địa Chỉ</th>
        <th style="width: 40px"></th>
        <th style="width: 40px"></th>
      </tr>
      @foreach($data_table as $index => $data)
      <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->address}}
        <td>
            <a href="{{route($model.'.show',$data->id)}}"class="btn btn-success btn-margin" title="Sửa">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
        </td>
        <td>
            <form class="" action="{{ $model . '/' . $data->id }}" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger btn-margin" title="Xóa">
                  <i class="fa fa-remove" aria-hidden="true"></i>
              </button>
            </form>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  <!-- /.card-body -->
</div>
@if(Session::get('thongbao'))
<div class="alert alert-success" style="top: -10px;" role="alert">
  {{Session::get('thongbao')}}
</div>
@endif
@endsection
