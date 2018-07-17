<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
      <?php 
        $args = array(
          'post_status' => 'publish', // Chỉ lấy những bài viết được publish
          'showposts' => 10, // số lượng bài viết
          'cat' => 8, // bỏ qua 2 bài
        );
      ?>
      <?php $getposts = new WP_query($args); ?>
      <?php global $wp_query; $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
      <?php endwhile; wp_reset_postdata(); ?>    
    <div class="clear"></div>
  </div>
</div>