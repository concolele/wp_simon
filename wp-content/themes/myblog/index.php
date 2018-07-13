<?php get_header(); ?>
        <div class="clear"></div>
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

                        //$tp_country = get_term_meta( $term->ID, 'linkcat', true );
                        

                        
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
                </div>
               <?php get_template_part('slide'); ?>
              </div>
            </div>
          </div><!--end top-content -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Mới nhất</a></li>
                <li><a data-toggle="pill" href="#menu1">Nổi bật</a></li>
              </ul>
              <div class="tab-content">
                <?php get_template_part('recent'); ?>
                <?php get_template_part('featured'); ?>
              </div>
            </div>
          </div><!--end tab-new-post -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Laptop</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/210123287340-202-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/may-tinh-hp-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/aaaaaaaaaa-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/5-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/lenovo-legion-y520-15ikbn-80wk0128mj-15-6-fhd-gaming-laptop-i7-7700h-nbpstore-1712-26-F555449_1-300x300.png" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/258_n3467___c4i51107-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/a4qon29ucpahz-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/SLYOGA310_C_-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/Laptop_ASUS_S510UA_BQ203_2-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/h23-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div><!--end tab-laptop -->
          <div class="tab-product">
            <div class="container">
              <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#home">Quần áo Nam</a></li>
              </ul>
              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/ao-khoac-jean-nam-4036-2-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/ao-so-mi-nam-4024-3-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/quan-jean-nam-4082-2-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/ao-thun-cap-co-tru-3173-2-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="list-product">
                    <div class="product-item">
                      <div class="item-img">
                        <a href=""><img src="<?php bloginfo('template_directory') ?>/img/ao-thun-nam-co-tru-3058-2-300x300.jpg" alt=""></a>
                        <div class="detail-mask">
                          <div class="link-href">
                            <a href=""><i class="fa fa-heart-o"></i></a>
                            <a href=""><i class="fa fa-link"></i></a>
                          </div>
                        </div>
                      </div>
                      <div class="item-details">
                        <p class="item-name"><span>HP</span></p>
                        <p class="item-price"><span>2000$</span></p>
                        <button class="buy-now"><i class="fa fa-shopping-basket"></i>Mua ngay</button>
                      </div>
                    </div>                    
                  </div><!--list-product-->
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div><!--end tab-male -->
          <div class="bot-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                  <div class="news">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#home">Tin tức</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="news-one">
                              <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                              <div class="meta">
                                <span>Ngày đăng: 05/04/2018</span>
                                <span>Lượt xem: 84</span>
                              </div>
                              <p class="news-content">HMD Global (công ty sở hữu thương hiệu Nokia) đã có một quý kinh doanh cuối cùng trong năm 2017 vô cùng khởi sắc. Theo dữ liệu từ hãng...</p>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>
                            <div class="news-other">
                              <div class="pull-left">
                                <a href=""><img src="<?php bloginfo('template_directory') ?>/img/nokia-6-treasure-tag-2-15179774412072055854573.jpg" alt=""></a>
                              </div>
                              <div class="pull-right">
                                <a class="news-title">Q4/2017: HMD Global bán được 21,5 triệu máy Nokia, 17,3 triệu chiếc</a>
                                <div class="meta">
                                  <span>Ngày đăng: 05/04/2018</span>
                                  <span>Lượt xem: 84</span>
                                </div>
                              </div>
                            </div>                                                        
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!--end news-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                  <div class="evaluate">
                    <ul class="nav nav-pills">
                      <li class="active"><a data-toggle="pill" href="#home">Đánh giá khách hàng</a></li>
                    </ul>
                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="<?php bloginfo('template_directory') ?>/img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="<?php bloginfo('template_directory') ?>/img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <div class="evaluate-item">
                                <p class="comment-txt">
                                  "Rất nhiều khách hàng hỏi thiết kế web để làm gì, thay vì trả lời câu hỏi đó chúng tôi 
                                  đi sâu vào phân tích cho khách hàng của mình những lợi ích mà một..."                        
                                </p>
                                <div class="rating">
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                  <i class="fa fa-star"></i>
                                </div>
                                <div class="member">
                                  <img src="<?php bloginfo('template_directory') ?>/img/123.png" alt="">
                                  <h3>Vinh</h3>
                                </div>
                              </div>
                            </div>                          
                          </div>                    
                        </div><!--end slide-->
                      </div>
                    </div>
                  </div><!--end evaluate-->
                </div>                
              </div>
            </div>
          </div><!--end bot-content -->
          <div class="other-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 mobile-style">
                  <div class="int-email">
                    <i class="fa fa-envelope"></i>
                    <p>
                      <span>
                      Đăng kí nhận email
                      </span>
                      Nhập email để được thông báo sớm nhất
                    </p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mobile-style">
                  <div class="box-subscribe">
                    <form action="" method="get" role="form">
                      <input type="text" placeholder="Email...">
                      <button>Đăng kí</button>
                      <div class="clear"></div>
                    </form>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 mobile-style">
                  <div class="social-content">
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                    <a href=""><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>                    
          </div><!--end other-content-->
        </div><!--end content -->
        <div class="clear"></div>
<?php get_footer(); ?>