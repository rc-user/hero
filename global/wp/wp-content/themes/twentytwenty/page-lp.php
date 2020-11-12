<?php
/*
Template Name: LPページ
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
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/lp-old.css" />

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
        <!-- /.wrap -->


        <div class="mv">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/insurance_dx_sales/mv.jpg" alt="">

          <div class="mv__wrap">
            <div class="mv__txt">
              <p><span>最新の<b>保険営業の極意</b>を伝授！</span><br><span><b>オンラインビジネスのプロ</b>が伝える、</span><br><span>これからの営業のあり方。</span></p>
            </div>
            <!-- /.mv__txt -->

            <dl class="mv__period">
              <dt><span>9.23<span>wed</span></span></dt>
              <dd><span>19:00-21:00 / @zoom</span></dd>

              <dt><span>9.26<span>sat</span></span></dt>
              <dd><span>11:00-13:00 / @zoom</span></dd>
            </dl>
          </div>
          <!-- /.mv__wrap -->
        </div>
        <!-- /.mv -->

        <div class="entry-btn scroll-link">
          <a href="#entry">いますぐお申込み</a>
        </div>
        <!-- /.entry-btn -->

        <p>デジタルトランスフォーメーションが<br class="sp">進む保険営業で<br>人を介して保険を購入する事の<br class="sp">必要性をどう感じてもらいますか？</p>

        <div class="profile">
          <div class="profile__img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/insurance_dx_sales/photo.jpg" alt="">
          </div>
          <!-- /.profile__img -->

          <div class="profile__txt">
            <div class="profile__txt__wrap">
              <h3 class="profile__txt__ttl">講師紹介<span>吉武 永賀</span></h3>
              <p>ストレッチポールの開発者。ビジネスコーチとして保険営業マンを育成、COT、TOTを多数輩出する。日本コアコンディショニング協会を立ち上げ、会員数4000人を誇る組織を創り上げる。現在はシンガポールに在住し、ほぼ全てのビジネスをオンラインで完結できる仕組みを構築。</p>
            </div>
            <!-- /.profile__txt__wrap -->

            <div class="profile__txt__message">
              <h3 class="profile__txt__message__ttl">講師からの<br>メッセージ</h3>
              <p>今や私のビジネスもオンライン化に成功し、シンガポールにいながら経営することが出来ています。その極意の核心の部分を今回のオンラインセミナーではお話ししますので、ぜひ皆さんのビジネスに活かしていただきたいと考えております。</p>
            </div>
            <!-- /.profile__txt__message -->
          </div>
          <!-- /.profile__txt -->
        </div>
        <!-- /.profile -->
      </section>


      <section class="movie">
        <iframe width="1000" height="563" src="https://www.youtube.com/embed/AM34dqFxjDI" frameborder="0" allow="accelerometer; autoplay;" encrypted-media; gyroscope; picture-in-picture" allowfullscreen"></iframe>

        <div class="movie__txt">
          <h2 class="movie__ttl">時代は変わる。</h2>
          <p>しかし、人間心理ひいてはビジネスの<br class="pc">根幹は大きく変わることはありません。<br>変わるものと変わらないもの、<br class="pc">時代の変化に伴うマーケットの変化を正確に把握し、<br class="pc">その中でも普遍的な価値を見定め<br class="pc">顧客と対等感をもったお付き合いができる保険営業マンへ。<br>あなたの営業スタイルを見直し、<br class="pc">時代に合わせた営業のあり方を考える機会をご提供致します。</p>
        </div>
        <!-- /.movie__txt -->
      </section>


      <section class="skill">
        <h2 class="skill__ttl">セミナー参加で身につく<br class="sp"><span>5つ</span>のこと</h2>

        <ol class="skill__list">
          <li>DXが進む<span>保険業界の最新情報</span></li>
          <li>どんな時でも変わらない<span>本質的な顧客ニーズ</span>の見つけ方</li>
          <li>売上や成果に直結する<span>自分の価値</span>の伝え方</li>
          <li>自分だけの<span>営業戦略を仕組み化</span>する方法</li>
          <li><span>DX環境</span>を活かした保険営業戦略</li>
        </ol>
      </section>


      <section id="entry">
        <h2 class="entry__ttl">セミナーお申し込みは<br class="sp">こちらから</h2>
        <ul class="entry__period">
          <li>開催日①：<br class="sp">2020年9月23日(水) 19時〜21時 <br class="sp">定員50名</li>
          <li>開催日②：<br class="sp">2020年9月26日(土) 11時〜13時 <br class="sp">定員50名</li>
        </ul>

        <p class="entry__price">参加費：5500円（税込）</p>

        <div class="entry__form">
          <form action="https://hero-t.com/p/r/NLfDEhki" enctype="multipart/form-data" id="UserItemForm" class="myForm" method="post" accept-charset="utf-8">
            <input type="hidden" name="_method" value="POST" />
            <!-- お支払い方法 -->
            <div class="input radiobutton input_unit  ">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Userpaymode" class="form_input_label required">お支払い方法</label> </div>
              </div>
              <div class="my_column my_right">
                <div class="radiobutton_frame">
                  <div class="radiobutton_input">
                    <input name="data[Proceed][paymode]" type="radio" id="Proceedpaymode_120_42" value="120_42" checked="checked" />
                  </div>
                  <div class="radiobutton_label">
                    <label for="Proceedpaymode_120_42" class="paymode_radio">クレジットカードでの一括払い<br class="sp">(代行業者：Stripe)</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- 姓 -->
            <div class="input text input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Username1" class="form_input_label  required">姓</label>
                </div>
              </div>
              <div class="my_column my_right">
                <input name="data[User][name1]" id="Username1" value="" class=" required" type="text" required="required" />
              </div>
            </div>
            <!-- 名 -->
            <div class="input text input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Username2" class="form_input_label  required">名</label>
                </div>
              </div>
              <div class="my_column my_right">
                <input name="data[User][name2]" id="Username2" value="" class=" required" type="text" required="required" />
              </div>
            </div>
            <!-- メールアドレス -->
            <div class="input text input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Usermail" class="form_input_label  required">メールアドレス</label>
                </div>
              </div>
              <div class="my_column my_right">
                <input name="data[User][mail]" id="Usermail" value="" class=" required" type="text" required="required" />
              </div>
            </div>
            <!-- 都道府県 -->
            <div class="input select input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Userpref" class="form_input_label  required">都道府県</label>
                </div>
              </div>
              <div class="my_column my_right">
                <div class="select_frame">
                  <select name="data[User][pref]" id="Userpref" class="form_input_input  required">
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="山形県">山形県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="千葉県">千葉県</option>
                    <option value="東京都" selected="selected">東京都</option>
                    <option value="神奈川県">神奈川県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- 住所 -->
            <div class="input text input_unit ">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Userzip" class="form_input_label ">住所</label>
                </div>
              </div>
              <div class="my_column my_right">
                <input name="data[User][zip]" id="Userzip" value="" class="" type="text" />
              </div>
            </div>
            <!-- 電話番号 -->
            <div class="input text input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Usertel" class="form_input_label  required">電話番号</label>
                </div>
              </div>
              <div class="my_column my_right">
                <input name="data[User][tel]" id="Usertel" value="" class=" required" type="text" required="required" />
              </div>
            </div>
            <!-- 参加予定日 -->
            <div class="input select input_unit  required">
              <div class="my_column my_left">
                <div class="label_frame">
                  <label for="Userfree1" class="form_input_label  required">参加予定日</label>
                </div>
              </div>
              <div class="my_column my_right">
                <div class="select_frame">
                  <select name="data[User][free1]" id="Userfree1" class="form_input_input  required">
                    <option value="2020/9/23 19:00-21:00">2020/9/23 19:00-21:00</option>
                    <option value="2020/9/26 11:00-13:00">2020/9/26 11:00-13:00</option>
                  </select>
                </div>
              </div>
            </div>
            <!-- 画像認証 -->
            <!-- 確認ボタン -->
            <div class="submit form_input_submit">
              <input type="submit" value="確認する" />
            </div>
            <input type="hidden" id="server_url" value="https://hero-t.com/" />
            <!-- ▼リファラ -->
            <input type="hidden" name="data[User][referer_form_url]" value="" class="UserRefererFormUrl" />
            <input type="hidden" name="data[User][referer_url]" value="" class="UserRefererUrl" />
            <script type="text/javascript">
            <!--
            if (document.referrer.length != 0) {
              if (document.getElementsByClassName("UserRefererUrl")) {
                var user_referer_url = document.getElementsByClassName("UserRefererUrl");
                for (var i = 0; i < user_referer_url.length; i++) {
                  user_referer_url[i].value = document.referrer;
                }
              } else if (document.getElementById("UserRefererUrl")) {
                document.getElementById("UserRefererUrl").value = document.referrer;
              }
            }
            if (document.getElementsByClassName("UserRefererFormUrl")) {
              var user_referer_form_url = document.getElementsByClassName("UserRefererFormUrl");
              for (var i = 0; i < user_referer_form_url.length; i++) {
                user_referer_form_url[i].value = location.href;
              }
            } else if (document.getElementById("UserRefererFormUrl")) {
              document.getElementById("UserRefererFormUrl").value = location.href;
            }
            //
            -->
            </script>
            <!-- ▲リファラ -->
          </form>
        </div>
        <!-- /.entry__form -->

        <script src="https://hero-t.com/js/validation.js?d=20200908165152"></script>
      </section>

      <section class="privacy">
        <h2 class="privacy__ttl">個人情報の管理・取扱いについて</h2>
        <p>当社では、お客様よりお預かりしました個人情報を、セミナーサービスやWebでの書籍、教材等の販売目的で利用いたします。<br>前述の利用目的達成の範囲内において業務委託する際には、個人情報を安全に管理できる委託先を選定した上で当該委託先を適切に監督いたします。なお、必要事項の中でご提出いただけない個人情報がある場合、サービスの一部をお受けいただけない場合がございますのでご了承下さい。個人情報の利用目的の通知、開示、内容の訂正、追加又は削除、利用の停止、消去及び第三者への提供の停止については、下記までご連絡ください。</p>

        <p>ザ・ヒーロートレーニング事務局 お客様相談窓口<br>TEL. 06-6123-7650</p>
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

  <script>
  $(function() {
    // スクロールアニメーション
    $('.scroll-link a').on('click', function(event) {
      event.preventDefault();

      var $this = $(this);
      var linkTo = $this.attr('href');
      var $target = $(linkTo);
      var offset = 0;
      var pos = $target.offset().top - offset;
      $('html,body').animate({
        scrollTop: pos
      }, 400);
    });
  });
  </script>
</body>
</html>
