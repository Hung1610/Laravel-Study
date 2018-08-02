@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
<div class="content pull-right">{{ $data_table->links() }}</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">CONTENT-CATEGORY</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-condensed">
              <tr>
                <th style="width: 10px">#</th>
                <th>user name</th>
                <th>email</th>
                <th style="width: 40px"></th>
                <th style="width: 40px"></th>
              </tr>
              @foreach($data_table as $index => $data)
              <tr>
                <td>{{ $index +1 }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>
                    <div onclick="window.location.href = '{{ url(config('controller.prefix_url') ) }}';" class="btn btn-primary btn-margin" title='Chi tiết'>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </td>
                <td>
                    <div onclick="window.location.href = '{{ url(config('controller.prefix_url') ) }}';" class="btn btn-danger btn-margin" title='Cập nhật'>
                        <i class="fa fa-remove" aria-hidden="true"></i>
                    </div>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection