<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <?php 
        $args = array(
          'post_status' => 'publish', // Chỉ lấy những bài viết được publish
          'showposts' => 2, // số lượng bài viết
        );
      ?>
      <?php $getposts = new WP_query($args); ?>
      <?php global $wp_query; $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="item">
          <?php echo get_the_post_thumbnail( get_the_id(), 'slider-thumb', array('alt' => get_the_title(), 'class' => 'images-slider' ));  ?>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
      <?php 
        $args = array(
          'post_status' => 'publish', // Chỉ lấy những bài viết được publish
          'showposts' => 1, // số lượng bài viết
          'offset' => 2, // bỏ qua 2 bài
        );
      ?>
      <?php $getposts = new WP_query($args); ?>
      <?php global $wp_query; $wp_query->in_the_loop = true; ?>
      <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <div class="item active">
          <?php echo get_the_post_thumbnail( get_the_id(), 'slider-thumb', array('alt' => get_the_title(), 'class' => 'images-slider' ));  ?>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!--end slide-->
</div> 