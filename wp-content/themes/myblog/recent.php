<div id="home" class="tab-pane fade in active">
  <!-- Get post mặt định -->
  <?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="list-product">
      <div class="product-item">
        <div class="item-img">
          <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
          <span class="new-post-text">Mới</span>
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
  <div class="clear"></div>
</div>