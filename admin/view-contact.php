<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <base href=".">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Quản trị hệ thống</title>
      <link rel="shortcut icon" href="favicon.png">
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
               <li class="active"><a href="contact.php">Phản hồi</a></li>
               <li class="active"><a href="view-contact.php">Chi tiết phản hồi</a></li>
            </ol>
            <div class="col-xs-12">
               <img src="images/profile.png" alt="profile" class="img-thumbnail pull-left"> <strong>Sang Nguyen</strong> <span class="hidden-xs">(sangnguyenplus@gmail.com)</span><br><small><i class="fa fa-calendar"></i> 11:27 Ngày 22/07/2014</small>
               <div id="content">
                  <p>Hi Sang,</p>
                  <p>
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <p>
                     Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                  </p>
                  <p>
                     Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                  </p>
               </div>
               <div class="form-group">
                 <div class="col-sm-offset-4 col-sm-8">
                     <a href="#" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa?');"><i class="fa fa-trash-o"></i> Xóa</a>
                     <a class="btn btn-warning" href="#"><i class="fa fa-reply"></i> Trở về</a>
                 </div>
             </div>
            </div>
         </div>
         <!--END #main-->
      </div>
      <style>
         .img-thumbnail{margin-right: 10px;}
         #content{margin-top: 20px; margin-left: 53px;}
      </style>
   </body>
</html>
