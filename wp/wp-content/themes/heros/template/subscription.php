<section class="subscription-temp">
  <div class="subscription-temp__img">
    <figure>
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/img_teiki.png" alt="">
    </figure>
  </div>
  <!-- /.subscription-temp__img -->

  <div class="subscription-temp__txt">
    <div class="subscription-temp__txt__wrap">
      <div class="subscription-temp__icon"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_cart02.svg" alt=""></div>
      <p><b>続けることで効果を実感！</b></p>

      <?php if ( is_page('teiki') ) : ?>
        <h1 class="subscription-temp__ttl">毎月届く お得なVI-DAの<span>定期購入</span></h1>
      <?php else: ?>
        <h2 class="subscription-temp__ttl">毎月届く お得なVI-DAの<span>定期購入</span></h2>
      <?php endif; ?>

      <p>通常価格3,850円のところ<br><b>発売記念価格2,500円<br>定期購入だとさらに<br>初回価格 <span class="subscription-temp__price subscription-temp__price--large"><span>1,100</span>円!</span><br>2回目以降もずっと<span class="subscription-temp__price">2,250円</span></b></p>

      <div class="subscription-temp__btn">
        <div class="common-btn">
          <a href="<?php echo esc_url( home_url( '/teiki/' ) ); ?>">定期購入について</a>
        </div>
        <!-- /.common-btn -->

        <div class="common-btn">
          <a href="https://shop.naniwasupli.com/merchandises/">通常商品はこちら</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.subscription-temp__btn -->
    </div>
    <!-- /.subscription-temp__txt__wrap -->
  </div>
  <!-- /.subscription-temp__txt -->
</section>