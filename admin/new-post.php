<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <base href=".">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Thêm mới bài viết</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/admin.css" rel="stylesheet">
      <link href="css/introjs.min.css" rel="stylesheet">
      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/intro.min.js"></script>
      <script type="text/javascript" src="js/admin.js"></script>
      <!--Hỗ trợ IE nhận dạng thẻ HTML5-->
      <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
      <body>
      <nav class="navbar navbar-inverse" role="navigation">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sang Nguyen<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="#"><i class="fa fa-user"></i> Chỉnh sửa tài khoản</a></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
      <div class="clearfix">
         <div id="sidebar-bg"></div>
         <div id="sidebar" role="navigation">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">
                     <i class="fa fa-th"></i><span> Danh mục quản lý</span>
                     <b class="fa fa-plus-sign visible-xs pull-right"></b>
                  </h3>
               </div>
               <ul id="menu" class="list-group">
                  <li class="list-group-item">
                     <a href="post.php">
                     <i class="fa fa-edit"></i> <span>Tin tức</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="product.php">
                     <i class="fa fa-fire"></i><span>Sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="type_product.php">
                     <i class="fa fa-bars"></i> <span>Loại sản phẩm</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="contact.php">
                     <i class="fa fa-envelope-o"></i> <span>Phản hồi<span class="badge pull-right">1</span></span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="slider.php">
                     <i class="fa fa-picture-o"></i> <span>Slider</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="user.php">
                     <i class="fa fa-user"></i> <span>Tài khoản</span>
                     </a>
                  </li>
                  <li class="list-group-item">
                     <a href="setting.php">
                     <i class="fa fa-wrench"></i> <span>Cấu hình</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div id="main">
         <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Trang quản trị</a></li>
            <li class="active"><a href="post.php">Bài viết</a></li>
            <li class="active"><a href="new-post.php">Thêm bài viết mới</a></li>
         </ol>
         <div class="col-xs-12">
            <form id="post-form" class="form-horizontal col-xl-9 col-lg-10 col-md-12 col-sm-12" method="post" action="#" enctype="multipart/form-data" role="form">
               <input name="id" type="hidden" value="0">
               <div class="form-group">
                  <label for="title" class="col-sm-2 control-label required">Tiêu đề</label>
                  <div class="col-sm-10">
                     <input name="title" type="text" value="" class="form-control" id="title" placeholder="Tên bài viết ( ~ 70 ký tự )" required="" maxlength="100">
                  </div>
               </div>
               <div class="form-group">
                  <label for="keywords" class="col-sm-2 control-label">Từ khóa</label>
                  <div class="col-sm-10">
                     <input name="keywords" type="text" value="" class="form-control" id="keywords" placeholder="meta keywords" maxlength="255">
                  </div>
               </div>
               <div class="form-group">
                  <label for="description" class="col-sm-2 control-label">Mô tả</label>
                  <div class="col-sm-10">
                     <textarea name="description" class="form-control" id="description" placeholder="meta description ( ~ 160 ký tự )" maxlength="255"></textarea>
                  </div>
               </div>
               <div class="form-group">
                  <label for="content" class="col-sm-2 control-label">Nội dung</label>
                  <div class="col-sm-10">
                       <textarea name="content" rows="5" class="form-control ckeditor" id="content" placeholder="Nội dung bài viết" ></textarea>
                   </div>
                <div class="form-group" >
                     <label class="col-sm-2 control-label">Ảnh</label>
                      <div class="col-sm-10 col-sm-offset-2">
                      <ul class="nav nav-tabs" role="tablist">
                       <li class="active"><a href="#img-file" role="tab" data-toggle="tab">Upload từ máy tính</a></li>
                       <li><a href="#img-url" role="tab" data-toggle="tab">Lấy từ URL</a></li>
                     </ul>
                      <div class="tab-content" style="margin-top: 15px; min-height: 100px;">
                          <div class="tab-pane active" id="img-file">
                              <label for="image" class="col-sm-3 control-label">Từ máy tính</label>
                              <div class="col-sm-9">
                                 <input name="image" type="file" class="form-control" id="image" accept="image/*">
                              </div>
                          </div>
                          <div class="tab-pane" id="img-url">
                              <label for="url" class="col-sm-3 control-label"> Từ URL</label>
                              <div class="col-sm-9">
                                 <input name="image" type="text" value="" class="form-control" id="url" placeholder="Đường dẫn tới hình ảnh" maxlength="255">
                              </div>
                          </div>
                        </div>
                     </div>
                  </div>
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</button>
                        <button type="submit" class="btn btn-danger"><small><i class="fa fa-save"></i></small> Lưu nháp</button>
                        <a class="btn btn-warning" href="#"><small><i class="fa fa-reply"></i></small> Trở về</a>
                     </div>
                  </div>
            </form>
            </div>
         </div>
         <!--END #main-->
      </div>
<script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="plugins/ckfinder/ckfinder.js"></script>
<script>
    var editor = CKEDITOR.replace( 'content', {
    filebrowserBrowseUrl : 'plugins/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'plugins/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'plugins/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
</script>
<style>
   .btn {margin-bottom: 10px;}
</style>
   </body>
</html>
