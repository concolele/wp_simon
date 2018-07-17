<?php get_header(); ?>
        <div class="clear"></div>
        <div class="breadcrumb">
          <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i>','</p>');} ?>  
          </div>
        </div>           
        <div class="content">
          <div class="top-content">
            <div class="container">
              <div class="row">
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
                    </ul>
                  </div>
                </div>
               <!--result of search -->
               <!-- Get post mặt định -->
               <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                <div class="search-page">
                  <div class="tab-product">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#home">Kết quả tìm kiếm: <span class="search-key">"<?php the_search_query(); ?>"</span></a></li>
                    </ul>
                    <div class="search-info">
                      <p>Xem tất cả: <span class="count-result"></span> <?php global $wp_query; echo $wp_query->found_posts; ?> kết quả</p>
                      <form action="<?php bloginfo('url'); ?>" method="GET" role="form">
                        <select name="" id="search-sort">
                          <option value="1">Thứ tự mặc định</option>
                          <option value="1">Phổ biến nhất</option>
                          <option value="1">Đánh giá cao nhất</option>
                          <option value="1">Mới nhất</option>
                          <option value="1">Giá từ thấp đến cao</option>
                          <option value="1">Giá từ cao đến thấp</option>
                        </select>
                      </form>
                    </div>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="list-product">
                              <div class="product-item">
                                <div class="item-img">
                                  <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
                                  <div class="detail-mask">
                                    <div class="link-href">
                                      <a href="<?php the_permalink(); ?>"><i class="fa fa-heart-o"></i></a>
                                      <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
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
                        <?php endwhile; else : ?>
                        <p>Không có</p>
                        <?php endif; ?>
                        <!-- Get post mặt định -->                          
                      </div>
                    </div>
                  </div><!--end tab-male -->
                </div>
				        </div>
              </div>
            </div>
          </div><!--end top-content -->
        </div><!--end content -->
        <div class="clear"></div>
<?php get_footer(); ?>