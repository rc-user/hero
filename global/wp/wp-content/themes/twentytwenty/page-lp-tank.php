<?php
/*
Template Name: 202011~LP>>thankページ
*/
?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>
    <?php blogInfo('name'); ?>
  </title>

  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/lp.css" />

  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2858941054205837');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2858941054205837&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>

  <main>
    <article>
      <section class="top">
        <div class="wrap">
          <ul class="ttl-caption">
            <li>保険</li>
            <li>DX</li>
            <li>営業</li>
          </ul>
          <h1>保険業界で今やるべき<br><span>DX営業戦略とは</span></h1>
        </div>

        <div class="main-movie">
          <h2>オンデマンド配信セミナー</h2>
          <div class="movie-wrap">
            <p>お申込いただきありがとうございます<br>完全版動画セミナーを受講ください。</p>
            <div class="youtube-wrap">
              <iframe width="1000" height="563" src="https://www.youtube.com/embed/AM34dqFxjDI?rel=0" frameborder="0" allow="accelerometer; autoplay;" encrypted-media; gyroscope; picture-in-picture" allowfullscreen"></iframe>
            </div>
          </div>

        <!--<div class="entry-btn scroll-link">
          <a href="#entry">受講後アンケートはこちら</a>
        </div>-->
        <div class="ank-btn">
          <!--HubSpot Call-to-Action Code --><span class="hs-cta-wrapper" id="hs-cta-wrapper-e802f99a-7cff-4dbc-9d90-7051a36e2b5a"><span class="hs-cta-node hs-cta-e802f99a-7cff-4dbc-9d90-7051a36e2b5a" id="hs-cta-e802f99a-7cff-4dbc-9d90-7051a36e2b5a"><!--[if lte IE 8]><div id="hs-cta-ie-element"></div><![endif]--><a href="https://cta-redirect.hubspot.com/cta/redirect/8224690/e802f99a-7cff-4dbc-9d90-7051a36e2b5a"  target="_blank" ><img class="hs-cta-img" id="hs-cta-img-e802f99a-7cff-4dbc-9d90-7051a36e2b5a" style="border-width:0px;" src="https://no-cache.hubspot.com/cta/default/8224690/e802f99a-7cff-4dbc-9d90-7051a36e2b5a.png"  alt="受講後アンケートはこちら"/></a></span><script charset="utf-8" src="https://js.hscta.net/cta/current.js"></script><script type="text/javascript"> hbspt.cta.load(8224690, 'e802f99a-7cff-4dbc-9d90-7051a36e2b5a', {}); </script></span><!-- end HubSpot Call-to-Action Code -->
        </div>

      <div class="book">
        <h2>アンケート回答特典</h2>
        <div class="book-wrap">
          <figure>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/insurance_dx_sales/book.png" alt="吉武永賀執筆成功のルールオンラインブック">
          </figure>
          <p>吉武永賀執筆成功のルール<br>オンラインブックをプレゼント</p>
        </div>
      </div>

      <div class="guide">
        <ul>
          <li><a href="https://heros.support/seminar" target="_blank">最新の<br>セミナーはこちら</a></li>
          <li><a href="https://heros.support/reception_c.html" target="_blank">最新の<br>ワークショップはこちら</a></li>
        </ul>
        <p>当ページは受講者専用ページです。<br>
          一度離れますとお戻りいただけませんので<br>
          ご注意ください。</p>
      </div>
    </section>
  </main>


  <footer id="footer">
    <div class="footer__wrap">
      <div class="footer__logo">
        <img src="https://heros.support/img/common/logo_3line.png" alt="ザ・ヒーロートレーニング 事務局">
      </div>
      <!-- /.footer__logo -->

      <div class="footer__info">
        <h3 class="footer__info__ttl">ザ・ヒーロートレーニング 事務局</h3>
        <p>〒550-0011 大阪府大阪市西区阿波座1-7-12 東新ビル5F<br>TEL. 06-6123-7650　　MAIL. cs@heros.support</p>
      </div>
      <!-- /.footer__info -->
    </div>
    <!-- /.footer__wrap -->

    <div class="footer__wrap">
      <nav class="footer__nav">
        <ul>
          <li><a href="https://rabbitc.co.jp/company/">運営会社</a></li>
          <li><a href="https://heros.support/privacy.html">プライバシーポリシー</a></li>
          <li><a href="https://heros.support/row.html">特定商取引法に基づく表記</a></li>
          <li><a href="https://heros.support/terms.html">利用規約</a></li>
        </ul>
      </nav>
      <!-- /.footer__nav -->

      <div class="copyright">
        <small>©2019 RABBIT CREATIVE Inc. All Rights Reserved.</small>
      </div>
      <!-- /.copyright -->
    </div>
    <!-- /.footer__wrap -->
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
</body>

</html>
