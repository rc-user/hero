<footer id="footer">
  <div class="page-top scroll-link">
    <a href="#body"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/btn_top.png" alt="TOP"></a>
  </div>
  <!-- /.page-top -->

  <div class="footer__wrap">
    <div class="footer__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/footer_logo.png" alt="ザ・ヒーロートレーニング"></a>
    </div>

    <div class="footer__txt">
      <nav class="footer__nav">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>">SEMINAR</a></li>
          <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">NEWS</a></li>
          <li><a href="<?php echo esc_url( home_url( '/concept/' ) ); ?>">CONCEPT</a></li>
          <li>
            <dl>
              <dt>TRAINER</dt>
              <dd><a href="<?php echo esc_url( home_url( '/trainer/hisayoshi-yoshitake/' ) ); ?>">吉武 永賀</a></dd>
              <dd><a href="<?php echo esc_url( home_url( '/trainer/yoshizumi-iwasaki/' ) ); ?>">岩﨑 由純</a></dd>
            </dl>
          </li>
          <li><a href="<?php echo esc_url( home_url( '/school/' ) ); ?>">SCHOOL</a></li>
          <li><a href="<?php echo esc_url( home_url( '/books/' ) ); ?>">BOOKS</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT</a></li>
        </ul>
      </nav>

      <ul class="footer__link">
        <li><a href="https://rabbitc.co.jp/" target="_blank">運営会社</a></li>
        <li><a href="<?php echo esc_url( home_url( '/privacy.html' ) ); ?>">プライバシーポリシー</a></li>
      </ul>

      <small class="copyright">©2019 RABBIT CREATIVE Inc. All Rights Reserved.</small>
    </div>
    <!-- /.footer__txt -->

    <div class="footer__sns">
      <ul>
        <li><a href="https://www.youtube.com/channel/UC7BUbg9Y2tXG6vfVFuaOORw" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_youtube.png" alt=""></a></li>
        <li><a href="#"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_instagram.png" alt=""></a></li>
        <li><a href="https://www.facebook.com/herofact2020" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_facebook.png" alt=""></a></li>
        <li><a href="https://twitter.com/hero_fact" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_twitter.png" alt=""></a></li>
      </ul>
    </div>
    <!-- /footer__sns -->
  </div>
  <!-- /.footer__wrap -->

</footer>

<?php wp_footer(); ?>
</body>

</html>