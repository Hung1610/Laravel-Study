@extends('admin.layouts.app')
@section('title', 'CONTENT')
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Them bai viet</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form name="frm_content" action="{{ route('contents.store') }}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="enter title">
      </div>
      <div class="mb-3">
        <label for="content">Content</label>
        <textarea id="content" name="content" style="width: 100%">This is my textarea to be replaced with CKEditor.</textarea>
      </div>
      <div class="form-check">
        <input type="checkbox" name="is_trend" class="form-check-input" id="is_trend" checked? value="1": value="0">
        <label class="form-check-label" for="is_trend">tin noi bat</label>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>

@endsection

@push('scripts')
<!-- CK Editor -->
<script src="{{ asset('template/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('#content'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })
  })
</script>
@endpush