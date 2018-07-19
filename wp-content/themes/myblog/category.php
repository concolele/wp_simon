<?php get_header(); ?>
<div class="clear"></div>
<div class="breadcrumb">
  <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i>','</p>');} ?>  
  </div>
</div>
<div class="cate-page">        
  <div class="content">
    <div class="top-content">
      <div class="container">
        <div class="row">
         <!--category-->
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
            <div class="category-page">
              <div class="tab-product">
                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#home"><?php single_cat_title(); ?></a></li>
                </ul>
                <div class="tab-content">
                  <div id="home" class="tab-pane fade in active">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                      <div class="news-other">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                            <div class="news-img">
                              <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                            <div class="news-infos">
                              <a class="news-title"><?php the_title(); ?></a>
                              <div class="meta">
                                <span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span>
                                <span>Lượt xem: 84</span>
                              </div>
                              <?php the_excerpt(); ?> 
                              <div class="read-more">
                                <a href="<?php the_permalink(); ?>">Xem thêm</a>                                                           
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endwhile; else : ?>
                    <p>Không có</p>
                    <?php endif; ?>
                    <!-- Get post mặt định -->                          
                  </div>
                </div>
              </div><!--end tab-male -->
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div><!--end top-content -->
  </div><!--end content -->
</div> 
<div class="clear"></div>
<?php get_footer(); ?>