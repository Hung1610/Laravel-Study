@extends('admin.layouts.app')
@section('title', 'CONTENT')
@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Them bai viet</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form name="frm_content" action="{{ route($model . '.store') }}" method="POST">
    @csrf
    <div class="card-body">
        {{-- ALIAS & TITLE --}}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="enter title" value="{{ old('title') }}">
      </div>
      <div class="form-group">
        <label for="title">Alias</label>
        <input type="text" name="alias" class="form-control" id="alias" placeholder="enter title" value="{{ old('alias') }}">
      </div>
        {{-- END ALIAS & TITLE --}}

      {{-- DATE MASK --}}
      <div class="form-group">
        <label for="content_date">Ngay dang</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
          </div>
          <input name="content_date" id="content_date" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask >
        </div>
      </div>
      {{-- /DATE-MASK --}}

      {{-- CK EDITOR --}}
      <div class="mb-3">
        <label for="content">Content</label>
        <textarea id="content" name="content" style="width: 100%">This is my textarea to be replaced with CKEditor.</textarea>
      </div>
      {{-- /CK-EDITOR --}}

      {{-- CHECK BOX --}}
      <div class="form-check">
        <input type="checkbox" name="is_trend" class="form-check-input" id="is_trend" checked? value="1": value="0">
        <label class="form-check-label" for="is_trend">tin noi bat</label>
      </div>
      {{-- /CHECK-BOX --}}
      <button id="test"> test </button>
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
<script src="{{ asset('js/alias.js') }}"></script>
<script>
  $(function () {
    // DATE-MASK
    $('#content_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    // END DATE-MASK
    
    // CK-EDITOR
    CKEDITOR.replace( 'content', {
        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
    } );
    // END CK-EDITOR
  })
</script>
@endpush
