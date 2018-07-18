<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
  <div class="box-category">
    <ul class="top-content-menu">
      <li id="active-menu-content">
        <span><i class="fa fa-list"></i>Danh mục sản phẩm</span>
      </li>
      <?php
        $args = array(
          'child_of'                  => 0,
          'parent'                    => 2,
          'hide_empty'                => 0,
        );
        
        $categories = get_categories( $args );
        
        foreach ( $categories as $category ) {  
      ?>
        <li>
           <a href="<?php echo get_term_link($category->slug, 'category');?>">
            <?php echo get_term_meta( $category->term_id, 'linkcat', true ); ?><?php echo $category->name ; ?> 
           </a>
        </li>
      <?php } ?>      
      <!-- <li>
        <a href=""><i class="fa fa-mobile"></i>Điện thoại</a>
      </li>
      <li>
        <a href=""><i class="fa fa-clock-o"></i>Đồng hồ</a>
        <span class="down-menu" ><i class="fa fa-sort-down"></i></span>
        <ul class="sub-menu-content" id="sub-menu-content">
          <li>
            <a href="#">Iphone</a>
          </li>
          <li>
            <a href="#">Sony</a>
          </li>
          <li>
            <a href="#">Samsung</a>
          </li>
        </ul>
      </li>
      <li>
        <a href=""><i class="fa fa-laptop"></i>Laptop</a>
      </li>
      <li>
        <a href=""><i class="fa fa-desktop"></i>Màn hình</a>
      </li>
      <li>
        <a href=""><i class="fa fa-fire"></i>Mỹ phẩm</a>
      </li>
      <li>
        <a href=""><i class="fa fa-male"></i>Thời trang nam</a>
      </li>
      <li>
        <a href=""><i class="fa fa-female"></i>Thời trang nữ</a>
      </li>
      <li>
        <a href=""><i class="fa fa-shopping-bag"></i>Túi xách</a>
      </li> -->
    </ul>
  </div>
  <div class="box-category">
    <ul class="top-content-menu">
      <li id="active-menu-content">
        <span><i class="fa fa-list"></i>Hỗ trợ</span>
      </li>
      <li>
        <a href=""><i class="fa fa-user"></i>Thiết kế web chuyên nghiệp</a>
      </li>
      <li>
        <a href=""><i class="fa fa-phone"></i>01658 949 680 (Huy Kira)</a>
      </li>
      <li>
        <a href=""><i class="fa fa-envelope"></i>huykira@gmail.com</a>
      </li>
    </ul>
  </div>
  <div class="box-category">
    <ul class="top-content-menu">
      <li id="active-menu-content">
        <span><i class="fa fa-list"></i>Quảng cáo</span>
      </li>
      <a href=""><img src="<?php bloginfo('template_directory') ?>/img/product/banner-sidebar.jpg" alt=""></a>
    </ul>
  </div>
  <div class="box-category">
    <ul class="top-content-menu">
      <li id="active-menu-content">
        <span><i class="fa fa-list"></i>Quảng cáo</span>
      </li>
      <div class="news-other">
          <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
          <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
      </div>
      <div class="clear"></div>
      <div class="news-other">
          <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
          <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
      </div>
      <div class="clear"></div>
      <div class="news-other">
          <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
          <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
      </div>    
      <div class="clear"></div>                                        
    </ul>
  </div>                                 
</div>