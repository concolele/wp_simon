<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/js/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/libs/font-awesome/css/font-awesome.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body class="home blog">
      <div id="wrapper">
        <header>
          <div class="top-header">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <div class="top-left pull-left">
                    <a href="<?php bloginfo('url') ?>">Trang chủ</a>
                  </div>
                  <div class="top-right pull-right">
                    <ul class="account">
                      <li class="dropdown show">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fa fa-user"></i>
                          <span class="account">Tài khoản</span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Đăng nhập</a>
                          <a class="dropdown-item" href="#">Đăng xuất</a>
                        </div>
                      </li>
                      <li>
                        <a href="">
                          <i class="fa fa-heart"></i>
                          <span class="favorite">Yeu thích</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> 
          </div><!--top-header-->
          <div class="center-header">
            <div class="container">
              <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mobile-style">
                  <div class="logo-header">
                    <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mobile-style push-desktop">
                  <div class="box-cart pull-right">
                    <a href="" class="cart-top">
                      <span>Giỏ hàng</span>
                      <br>
                      <span>0 Sản phẩm - 0d</span>
                    </a>                    
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mobile-style push-desktop">
                  <div class="box-search">
                    <form action="" method="get" role="form">
                      <select name="product-cat" id="product-cat">
                        <option value="1">Danh mục</option>
                        <option value="1">Laptop</option>
                        <option value="1">Quần áo nam</option>
                        <option value="1">Quần áo nữ</option>
                      </select>
                      <input type="text" placeholder="Từ khóa...">
                      <button>Tìm kiếm</button>
                      <div class="clear"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div><!--center-header-->
          <div class="clear"></div>
          <div class="menu-top">
            <div class="container">
              <div class="menu-mobile">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="pull-left">Menu</div>
                    <div class="pull-right click-menu">
                      <span></span>
                    </div>
                  </div>
                </div>                
              </div>
              <div class="main-menu" id="main-menu">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'container' => 'false'
                      )
                  )
                 ?>  
              </div>              
            </div>
          </div><!--menu-header-->
        </header>