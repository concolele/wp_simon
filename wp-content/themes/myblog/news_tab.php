<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <?php 
          $args = array(
            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
            'showposts' => 1, // số lượng bài viết
            'cat' => 3, // lấy cate id  = 3
          );
        ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
          <div class="news-one">
            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
            <a class="news-title"><?php the_title(); ?></a>
            <div class="meta">
              <span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span>
              <span>Lượt xem: 84</span>
            </div>
            <p class="news-content"><?php the_excerpt(); ?></p>
          </div>
        <?php endwhile; wp_reset_postdata(); ?>  
      </div> 
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <?php 
          $args = array(
            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
            'showposts' => 3, // số lượng bài viết
            'cat' => 3, // lấy cate id  = 3
            'offset' => 1, // bỏ qua 2 bài
          );
        ?>
        <?php $getposts = new WP_query($args); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>        
        <div class="news-other">
          <div class="pull-left">
            <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( get_the_id(), 'full', array( 'class' => 'thumnail') ); ?></a>
          </div>
          <div class="pull-right">
            <a class="news-title"><?php the_title(); ?></a>
            <div class="meta">
              <span>Ngày đăng: <?php echo get_the_date('d - m - Y'); ?></span>
              <span>Lượt xem: 84</span>
            </div>
          </div>
        </div> 
        <?php endwhile; wp_reset_postdata(); ?>  
      </div>     
    </div>
  </div>
</div>