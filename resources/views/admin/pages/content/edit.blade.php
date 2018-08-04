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
    {{ method_field('PUT') }}
    <div class="card-body">

      {{-- ALIAS & TITLE --}}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="enter title" value="{{ $data->title }}">
      </div>
      <div class="form-group">
        <label for="title">Alias</label>
        <input type="text" name="alias" class="form-control" id="alias" placeholder="enter title" value="{{ $data->alias }}">
      </div>
      {{-- END ALIAS & TITLE --}}
      
      {{-- SUB --}}
      <div class="form-group">
        <label for="sub_category_id">Sub title</label>
        <select name="sub_category_id" id="sub_category_id" class="form-control">
          @foreach($sub as $data_sub)
            <option value="{{ $data_sub->id }}">{{ $data_sub->name }}</option>
          @endforeach
        </select>
      </div>
      {{-- END-SUB --}}

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
      
      {{-- THUMBNAIL --}}
      <div class="form-group">
        <label for="thumbnail">Thumbnail:  <img src="{{ asset($data->img) }}" alt="" width="100" height="100" class="img-thumbnail"> </label><br>
        <input type="file" name="thumbnail" id="thumbnail">
      </div>
      {{-- //THUMBNAIL --}}
      
      {{-- CK EDITOR --}}
      <div class="mb-3">
        <label for="content">Content</label>
        <script></script>
        <textarea id="content" name="content" style="width: 100%" placeholder="enter your content here">{{ $data->content }}</textarea>
      </div>
      {{-- /CK-EDITOR --}}

      {{-- CHECK BOX --}}
      <div class="form-check">
          <input type="hidden" name="is_trend" value="0">
          <input type="checkbox" name="is_trend" value="1" {{ old('is_trend',$data->is_trend) == 1 ? 'checked' : '' }}>
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
  // ALIAS
  function str_to_alias(id, idResult) {
      var title, slug;
      title = $('#'+id).val();
      slug = title.toLowerCase();
      slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
      slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
      slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
      slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
      slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
      slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
      slug = slug.replace(/đ/gi, 'd');
      slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
      slug = slug.replace(/ /gi, "-");
      slug = slug.replace(/\-\-\-\-\-/gi, '-');
      slug = slug.replace(/\-\-\-\-/gi, '-');
      slug = slug.replace(/\-\-\-/gi, '-');
      slug = slug.replace(/\-\-/gi, '-');
      slug = '@' + slug + '@';
      slug = slug.replace(/\@\-|\-\@|\@/gi, '');
      $('#'+idResult).val(slug);
  }

  $("#title").keyup(function () {
      str_to_alias("title", "alias");
  });
  // END-ALIAS

  $(function () {
      //Datemask dd/mm/yyyy
      $('#content_date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
      //Datemask2 mm/dd/yyyy
      $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
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

  // SUB-CATEGORY
  $(document).ready(function(){
      $('#sub_category_id').val('{{ old('sub_category_id', $data->sub_category_id) }}');
  });
  // END SUB-CATEGORY

</script>
@endpush