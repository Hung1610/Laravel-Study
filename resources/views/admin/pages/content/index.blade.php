@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
{{ $data_table->links() }}
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Condensed Full Width Table</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>title</th>
        <th>views</th>
        <th style="width: 40px"></th>
        <th style="width: 40px"></th>
      </tr>
      @foreach($data_table as $index => $data)
      <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->views }}</td>
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
@endsection