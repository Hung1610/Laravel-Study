@extends('admin.layouts.app')
@section('title', 'CONTENT')
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Chinh Sua bai viet</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form name="frm_content" action="{{ route($model . '.update', $data->id) }}" method="POST">
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="enter title" value="{{ $data->title }}">
      </div>
      {{-- DATE MASK --}}
      <div class="form-group">
        <label for="content_date">Ngay dang</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
          </div>
          <input name="content_date" id="content_date" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="{{ $data->content_date }}">
        </div>
      </div>
      {{-- /DATE-MASK --}}

      {{-- CK EDITOR --}}
      <div class="mb-3">
        <label for="content">Content</label>
        <script></script>
        <textarea id="content" name="content" style="width: 100%" placeholder="enter your content here">{{ $data->content }}</textarea>
      </div>
      {{-- /CK-EDITOR --}}

      {{-- CHECK BOX --}}
      <div class="form-check">
        <input type="checkbox" name="is_trend" class="form-check-input" id="is_trend" value="{{ $data->is_trend }}">
        <label class="form-check-label" for="is_trend">tin noi bat</label>
      </div>
      {{-- /CHECK-BOX --}}

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
<script src="{{ asset('template/admin/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('template/admin/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('template/admin/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<script>
  $(function () {
    //Datemask dd/mm/yyyy
    $('#content_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
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