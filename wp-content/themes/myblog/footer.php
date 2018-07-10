<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package blog
 */
?>
        <footer>
          <div class="top-footer">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                  <div class="info-contact">
                    <h3>Thông tin liên hệ</h3>
                    <div class="contact-content">
                      <a href=""><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt=""></a>
                      <p>Chúng tôi chuyên thiết kế và lập trình website trên ngôn ngữ PHP và nền tảng WordPress.</p>
                      <p><span><i class="fa fa-home"></i> Địa chỉ:</span> K457/44 Tôn Đức Thắng, Liên Chiểu, Đà Nẵng</p>
                      <p><span><i class="fa fa-envelope-open"></i> Email:</span> huykira@gmail.com</p>
                      <p><span><i class="fa fa-phone"></i> Điện thoại:</span>  -  01658949680</p>
                      <p><span><i class="fa fa-globe"></i> Website:</span> http://free-html.com/product</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                  <div class="info-contact">
                    <h3>Tài khoản</h3>
                    <div class="contact-content">
                      <ul class="menu-footer">
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Giới thiệu</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Tài khoản</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Giỏ hàng</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Thanh toán</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Liên hệ</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Yêu thích</a>
                        </li>                                                                  
                      </ul>
                    </div>
                  </div>
                </div>  
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
                  <div class="info-contact">
                    <h3>Tài khoản</h3>
                    <div class="contact-content">
                      <ul class="menu-footer">
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Giới thiệu</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Tài khoản</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Giỏ hàng</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Thanh toán</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Liên hệ</a>
                        </li>
                        <li>
                          <a href="#"><i class="fa fa-angle-double-right"></i>Yêu thích</a>
                        </li>                                                                  
                      </ul>
                    </div>
                  </div>
                </div> 
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                  <div class="info-contact">
                    <h3>Tài khoản</h3>
                    <div class="contact-content">
                      <div class="fb-page" data-href="https://www.facebook.com/simonstore152/" data-tabs="timeline" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/simonstore152/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/simonstore152/">SIMON STORE - 152/35 Phan Thanh</a></blockquote></div>
                    </div>
                  </div>
                </div>             
              </div>
            </div>
          </div>
          <div class="bot-footer">
            <p><span>Copyright © 2018 Blog HuyKira All Rights Reserved. Design by Huy Kira</span></p>
          </div>
          <a href="" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </footer>
      </div><!--end wrapper -->
      <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
      <script src="<?php bloginfo('template_directory') ?>/js/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php bloginfo('template_directory') ?>/js/test.js"></script>
      <?php wp_footer(); ?>
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>