<!DOCTYPE html>
<html>
  <head>
    @include('frontend.includes.head')
    <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
  </head>
  <body>
    @include('frontend.includes.header')
    <!-- Page Content -->
      <div class="container">
        <div class="row">
        <div class="col-md-9">

        <div>
          <p>category :
            <a href="#" class="badge badge-light">some category</a>
            <a href="#" class="badge badge-light">some category</a>
            <a href="#" class="badge badge-light">some category</a>
            <a href="#" class="badge badge-light">some category</a>
          </p>
        </div>
        <h1 style="font-weight: bold;">
          {{$data_content->title}}
        </h1>
        <div>
          <p>Ngày Đăng : {{$data_content->content_date}} </p>
          <p> Author: ... </p>
        </div>
        <hr>
        <div style="font-family: 'Tinos', serif;font-size:120%;">
          {!!$data_content->content!!}
          <p>Nguồn : .... </p>
        </div>
        <hr>
        <p>ads place here </p>
        <hr>
        <div style="margin-top:10px;"><h4>Bài Đăng Nổi Bậc ( chưa add) </h4></div>
        <hr>
        <div class="formcomment">
          <p class="binhluantittle">Bình Luận </p>
          <div class="row">
            <div class="col-md-2">
              <img src="" alt="AVATAR CỰC TO">
            </div>
          <div class="col-md-10">
            <form class="" action="index.html" method="post">
              <textarea id="message" name="message"></textarea>
              <input id="commentinput" type="submit" value="Gửi bình luận!" />
            </form>
          </div>
        </div>
      </div>
      <hr>
      <div class="">
        <h3>PLACE FOR USER SEE COMMENT</h3>
      </div>
       </div>
       </div>
       <!-- /.row -->
   </div>
   <!-- end Page Content -->
   @include('frontend.includes.footer')
  </body>
</html>
