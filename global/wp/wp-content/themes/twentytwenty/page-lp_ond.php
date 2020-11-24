<?php
/*
Template Name: オンデマンド版LPページ
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
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
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
            <p>無料視聴15分をお試しください。<br>
            <span>※動画が再生されない場合はAdBlock等の広告ブロッカーをオフにしてください</span></p>
            <div class="youtube-wrap">
              <iframe src="https://drive.google.com/file/d/1nlYuIVQq7q9-JO9sK2URpe2qWa-M8LaI/preview" width="640" height="480"></iframe>
            </div>
          </div>
          <div class="entry-btn scroll-link">
            <a href="#entry">続きを見る</a>
          </div>
        </div>

        <div class="skill">
          <h2 class="skill__ttl">セミナー参加で身につく<br class="sp"><span>5つ</span>のこと</h2>
          <ol class="skill__list">
            <li>DXが進む<span>保険業界の最新情報</span></li>
            <li>どんな時でも変わらない<span>本質的な顧客ニーズ</span>の見つけ方</li>
            <li>売上や成果に直結する<span>自分の価値</span>の伝え方</li>
            <li>自分だけの<span>営業戦略を仕組み化</span>する方法</li>
            <li><span>DX環境</span>を活かした保険営業戦略</li>
          </ol>
        </div>
      </section>

      <section class="slide">
        <h2>リアルタイム参加者の声</h2>
        <div class="swiper-container top-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-text">
                    <p>同僚からの勧めで参加しました。</p>
                    <p>オンラインをどう活用するかがピンときていなかったが、イメージが広がりました。</p>
                    <p>生保営業・N様</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-text">
                    <p>withコロナの中での営業戦略を模索していましたが、</p>
                    <p>力強い言葉で進むべき方向を照らしていただけました。</p>
                    <p>国内生保営業・O様</p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-text">
                    <p>自分を変えるために参加しました。</p>
                    <p>普段聞けないことで非常に刺激になりました。</p>
                    <p>顧客への見方が変わりました。</p>
                    <p>火災保険営業・O様</p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
          </div>
      </section>

      <section class="profile">
        <h2>講師紹介</h2>
        <div class="profile-wrap">
          <div class="profile__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/insurance_dx_sales/photo.jpg" alt="">
          </div>

          <div class="profile__txt">
            <div class="profile__txt__wrap">
              <h3 class="profile__txt__ttl">講師紹介<span>吉武 永賀</span></h3>
              <p>ストレッチポールの開発者。ビジネスコーチとして保険営業マンを育成、COT、TOTを多数輩出する。日本コアコンディショニング協会を立ち上げ、会員数4000人を誇る組織を創り上げる。現在はシンガポールに在住し、ほぼ全てのビジネスをオンラインで完結できる仕組みを構築。</p>
            </div>

            <div class="profile__txt__message">
              <h3 class="profile__txt__message__ttl">講師からの<br>メッセージ</h3>
              <p>今や私のビジネスもオンライン化に成功し、シンガポールにいながら経営することが出来ています。その極意の核心の部分を今回のオンラインセミナーではお話ししますので、ぜひ皆さんのビジネスに活かしていただきたいと考えております。</p>
            </div>
          </div>
        </div>
      </section>

      <section id="entry">
        <h2>完全版動画視聴お申込フォーム</h2>
        <p>動画セミナー参加料：無料</p>
        <div class="form-wrap">
          <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
          <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
          <script>
            hbspt.forms.create({
              portalId: "8224690",
              formId: "3058a23d-a682-423f-b0f9-d652b2c2f751"
            });
          </script>
        </div>
      </section>

      <section class="privacy">
        <div class="privacy-wrap">
          <h2 class="privacy__ttl">個人情報の管理・取扱いについて</h2>
          <p>当社では、お客様よりお預かりしました個人情報を、セミナーサービスやWebでの書籍、教材等の販売目的で利用いたします。<br>前述の利用目的達成の範囲内において業務委託する際には、個人情報を安全に管理できる委託先を選定した上で当該委託先を適切に監督いたします。なお、必要事項の中でご提出いただけない個人情報がある場合、サービスの一部をお受けいただけない場合がございますのでご了承下さい。個人情報の利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止については、下記までご連絡ください。</p>
          <p>ザ・ヒーロートレーニング事務局 お客様相談窓口<br>TEL. 06-6123-7650</p>
        </div>
      </section>

    </article>
  </main>


  <footer id="footer">
    <div class="footer__wrap">
      <div class="footer__logo">
        <img src="https://heros.support/img/common/logo_3line.png" alt="ザ・ヒーロートレーニング 事務局">
      </div>
      <!-- /.footer__logo -->

      <div class="footer__info">
        <h3 class="footer__info__ttl">ザ・ヒーロートレーニング 事務局</h3>
        <p>〒530-0002 大阪府大阪市北区曽根崎新地1-13−22 御堂筋フロンティア 1階 WeWork (株)ラビットクリエイティブ<br>TEL. 06-6123-7650　　MAIL. cs@heros.support</p>
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
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
</body>

</html>
