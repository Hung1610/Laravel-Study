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
        <th>user</th>
        <th>content</th>
        <th style="width: 40px"></th>
        <th style="width: 40px"></th>
      </tr>
      @foreach($data_table as $index => $data)
      <tr>
        <td>{{ $index+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>
            <div onclick="window.location.href = '{{ url(config('controller.prefix_url') ) }}';" class="btn btn-primary btn-margin" title='Chi tiết'>
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </div>
        </td>
        <td>

            <form class="" action="users/{{$data->id}}" method="post">
              @csrf
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger btn-margin">
                  <i class="fa fa-remove" aria-hidden="true"></i>
              </button>
            </form>

        </td>
      </tr>
      @endforeach
    </table>
    @if(Session::get('thongbao'))
    <div class="alert alert-danger" role="alert">
      {{Session::get('thongbao')}}
    </div>
    @endif
  </div>
  <!-- /.card-body -->
</div>
@endsection
