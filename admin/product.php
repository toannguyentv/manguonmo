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
<?php include ("headeradm.php"); ?>
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
            <li class="active"><a href="product.php">Sản phẩm</a></li>
        </ol>
        <div class="col-xs-12">
            <form id="post_form" method="post" action="" role="form">
                <div class="col-xs-12">
                    <div class="form-group">
                        <!-- Single button -->
                        <div class="btn-group">
                            <select id="task" name="task" class="form-control">
                                <option>Tác vụ</option>
                                <option value="delete">Xóa</option>
                                <option value="deactive">Ẩn</option>
                                <option value="active">Hiện</option>
                            </select>
                        </div>
                        <a href="new-product.php" class="btn btn-submit"><small><i class="fa fa-plus"></i></small> Thêm mới</a>
                        <div class="btn-group pull-right hidden-xs" id="div-search">
                            <input id="search" name="search" type="text" value="" class="form-control" placeholder="Tìm kiếm">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th><input id="check_all" type="checkbox"></th>
                            <th class="hidden-xs">ID</th>
                            <th class="hidden-xs">Mã</th>
                            <th>Sản phẩm</th>
                            <th class="hidden-sm hidden-xs">Giá</th>
                            <th class="hidden-sm hidden-xs">Ngày thêm</th>
                            <th>Sửa</th>
                            <th>Tình trạng</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $danhmuc_query = mysqli_query($conn,"SELECT * from sanpham");
                        while ($danhmuc_items = mysqli_fetch_array($danhmuc_query))
                        {
                        ?>
                        <tr>
                            <?php
                            echo '<td>
                                <input name="id[]" type="checkbox" value="0">
                            </td>
                             <td class="hidden-xs">'.$danhmuc_items['id_sanpham'].'</td>
                            <td class="hidden-xs"> '.$danhmuc_items['code_product'].'</td>
                            <td>'.$danhmuc_items['tensp'].'</td>
                             <td class="hidden-sm hidden-xs"> '.number_format($danhmuc_items['price']).'  VNĐ</td>
                             <td class="hidden-sm hidden-xs"> '.$danhmuc_items['created'].'</td>
                            <td>
                                <a href="new-product.php"><i class="fa fa-edit" data-toggle="tooltip" data-placement="top" title="Sửa sản phẩm"></i></a>
                            </td>
                            <td>
                                <i class="fa fa-check text-success" data-toggle="tooltip" data-placement="top" title="Đang hiển thị"></i>
                            </td>
                       '; ?></tr>   <?php }?>
                        </tbody>
                    </table>
                    <div class="text-right">
                        <ul class="pagination" id="step5">
                            <li class="disabled"><span>«</span></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                    <p><strong><i class="fa fa-bookmark"></i>Ghi chú: </strong></p>
                    <p class="note-items"><i class="fa fa-check text-success"></i> Hiển thị với người dùng.</p>
                    <p class="note-items"><i class="fa fa-times text-danger"></i> Ẩn với người dùng</p>
                </div>
            </form>
        </div>
    </div>
    <!--END #main-->
</div>
</body>
</html>
