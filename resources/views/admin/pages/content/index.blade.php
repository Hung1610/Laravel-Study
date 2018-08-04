@extends('admin.layouts.app')
@section('title', 'CONTENT-CATEGORY')

@section('content')
 {{-- #SESSION --}}
@if(Session::has('flash_message'))
<div class="alert {{ Session::get('alert-class') }} alert-dismissible">
  	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  	<h5><i class="icon fa fa-check"></i> Thông báo!</h5>
  	{{ session('flash_message') }}
</div>
@endif
{{-- //SESSION --}}

<a href="{{ route($model . '.create') }}">Them bai viet</a>
{{ $data_table->links() }}
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Condensed Full Width Table</h3>
  </div>

  <div class="card-body p-0">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>title</th>
        <th>Trend</th>
        <th>views</th>
        <th style="width: 40px"></th>
        <th style="width: 40px"></th>
      </tr>

      {{-- FOR-EACH --}}
      @foreach($data_table as $index => $data)
      <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->is_trend }}</td>
        <td>{{ $data->views }}</td>

        {{-- INSERT-BNT --}}
        <td>
            <a href="{{ route($model . '.edit', $data->id) }}">
              <div class="btn btn-primary btn-margin" title='Cập nhật'>
                <i class="fa fa-pencil" aria-hidden="true"></i>
              </div>
            </a>
        </td>
        {{-- //INSERT-BNT --}}

        {{-- DELETE-BNT --}}
        <td>
          <form method="POST" action="{{ route($model . '.destroy', $data->id) }}">
            {{ csrf_field() }}
              {{ method_field("DELETE") }}
              <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i></button>
            </form>
        </td>
        {{-- /DELETE-BNT --}}
      </tr>
      @endforeach
      {{-- /END FOR-EACH --}}
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection