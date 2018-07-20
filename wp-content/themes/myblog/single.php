<?php get_header(); ?>
<div class="breadcrumb">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i>','</p>');} ?>  
  </div>
</div> 
<div class="content">
  <div class="single-page">
    <div class="top-content">
      <div class="container">
        <div class="show-product">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="img-product">
                <a href="">
                  <img src="<?php bloginfo('template_directory') ?>/img/product/210123287340-202.jpg" alt="">
                </a>
              </div>
              <div class="thumb-img">
                <a href="">
                  <img src="<?php bloginfo('template_directory') ?>/img/product/210123287340-202.jpg" alt="">
                </a>
                <a href="">
                  <img src="<?php bloginfo('template_directory') ?>/img/product/fffffffffffs.jpg" alt="">
                </a>
                <a href="">
                  <img src="<?php bloginfo('template_directory') ?>/img/product/azu.jpg" alt="">
                </a>
                <a href="">
                  <img src="<?php bloginfo('template_directory') ?>/img/product/1463966601_asus-k501lb-xx136d.jpg" alt="">
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
              <div class="detail-product">
                <h4><?php the_title(); ?></h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>0<span>đ</span></p>
                <div class="description">
                  <div class="descrip-head">Mô tả</div>
                  <p>Tặng Office 365 Personal Hoặc Lì xì 300,000đ</p>
                  <p>Tặng Chuột Gaming Asus</p>
                  <p>Tặng Balo Laptop</p>
                </div>
                <form action="" method="post">
                  <div class="quantity">
                    <label for="">Số lượng</label>
                    <input type="number" min="1" size="4" value="1">
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                      <button type="submit">Thêm vào giỏ<span>Giao tận nơi hoặc tại shop</span></button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                      <button type="submit" class="buy-now">Mua hàng ngay<span>Nhanh chóng - tiện lợi</span></button>
                    </div>
                  </div>
                </form>
                <p class="call-in">Gọi <span>1800-6601</span> để được tư vấn (miễn phí cuộc gọi)</p>
              </div>
            </div>
          </div>                
        </div>
      </div>
    </div><!--end top-content -->
    <div class="mid-content">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <div class="content-pro-detail">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Chi tiết sản phẩm</a></li>
                <li><a data-toggle="pill" href="#menu1">Bình luận</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="product-common">
                    <div class="meta">
                      <span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?>. </span>
                      <span>Tác giả: <?php the_author(); ?>. </span>
                      <span>Chuyên mục: <?php the_category(', '); ?>. </span>
                      <span>Lượt xem: 1234 lượt</span>
                    </div>
                    <article>
                      <?php the_content() ?>
                    </article>
                    <div class="tag">
                      <p><?php the_tags('Từ khóa: '); ?></p>
                    </div>
                    <div class="like-fb">
                      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="standard" data-action="recommend" data-size="small" data-show-faces="true" data-share="true"></div>
                    </div>
                  </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                  <div class="comment-fb">
                    <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="5" data-width="100%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
    <div class="product-ref">
      <!-- Hiển thị bài viết theo Tag -->
      <div id="relatedposttags">    
          <?php
            $categories = get_the_category(get_the_id());
            if ($categories) 
            {
              $category_ids = array();
              foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
              // lấy danh sách các tag liên quan
              $args=array(
              'category__in' => $category_ids,
              'post__not_in' => array(get_the_id()), // Loại trừ bài viết hiện tại
              'showposts'=>4, // Số bài viết bạn muốn hiển thị.
              );
              $my_query = new wp_query($args);
              if( $my_query->have_posts() ) 
              {
          ?>
          <div class="tab-product">
                <div class="container">
                  <ul class="nav nav-pills">
                    <li class="active"><a data-toggle="pill" href="#home">Sản phẩm liên quan</a></li>
                  </ul>        

          <?php  while ($my_query->have_posts()) 
                    {
                        $my_query->the_post();
          ?>
                        <!-- <li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li> -->
                        <div class="list-product">
                          <div class="product-item">
                            <div class="item-img">
                              <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
                              <div class="detail-mask">
                                <div class="link-href">
                                  <a href=""><i class="fa fa-heart-o"></i></a>
                                  <a href=""><i class="fa fa-link"></i></a>
                                </div>
                              </div>
                            </div>
                            <div class="item-details">
                              <p class="item-name"><span><?php the_title(); ?></span></p>
                              <p class="item-price"><span>2000$</span></p>
                              <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                            </div>
                          </div>                    
                        </div><!--list-product-->
                        <?php
                    }
                    // echo '</ul>';
                  }
              }
          ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div><!--end content -->
<div class="clear"></div>
<?php get_footer(); ?>