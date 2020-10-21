<?php
/*
Template Name: TRAINER下層ページ用
*/
?>

<?php get_header(); ?>

<main id="main">
  <article>
    <section class="second__mv">
      <div class="second__mv__ttl">
        <?php
          $parent_id = $post->post_parent; //親ページのIDを取得
          echo get_post($parent_id)->post_title; //タイトル
        ?>
      </div>
      <div class="second__mv__img">
        <?php
          $parent_id = $post->post_parent; //親ページのIDを取得
          echo get_the_post_thumbnail($parent_id);
        ?>
      </div>
    </section>

    <section class="trainer__second">
      <div class="trainer__second__wrap">
        <p class="trainer__second__ttl">TRAINER PROFILE</p>
        <div class="trainer__second__profile">
          <div class="trainer__second__profile__img">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <!-- /.trainer__second__profile__img -->

          <div class="trainer__second__profile__txt">
            <h1 class="trainer__second__profile__name">
              吉武 永賀<span>HISAYOSHI YOSHITAKE</span>
            </h1>
            <p>ストレッチポール®創業者<br>株式会社LPN代表取締役<br>(株)日本コアコンディショニング協会 名誉理事<br>ビジネスコーチ / ミッショントレーナー</p>
          </div>
          <!-- /.trainer__second__profile__txt -->
        </div>
        <!-- /.trainer__second__profile -->

        <div class="traniner__contents">
          <h2>ミッションに生きる</h2>
          <p>ミッションに生きるとは、「自分らしい人生を生きること」です。そしてこのミッションを私は「好きで得意」と定義しました。好きで得意なことは、継続や貢献につながり、誇らしい自分だけの人生を描く礎になることでしょう。</p>

          <h2>好きで得意を見つける</h2>
          <p>好きで得意なことを自分の仕事にできたとしたら、どれだけ自分の人生が豊かになるのでしょうか。ではあなた自身の「好きで得意」なことは何でしょうか。まずは見つけるところから「ミッションに生きる」ことは始まります。</p>

          <h2>併走するパートナーとして</h2>
          <p>あなたの今の「好きで得意」は過去の人生のどこから来るのでしょうか。あなたは何故存在し、今まさにどのような価値を秘めているのかそして見つけた価値を強みにしてどのように想いのまま表現するのか、一人で気づき深めることが難しいからこそパートナーやメンターの存在が重要です。ミッショントレーナーはそのようなあなたのパートナーとして、最大限あなたの価値を引き出し、高め続けます。</p>

          <iframe class="traniner__contents__movie" width="800" height="460" src="https://www.youtube.com/embed/AM34dqFxjDI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- /.traniner__contents -->
      </div>
      <!-- /.trainer__second__wrap -->

      <div class="trainer__seminar">
        <h2 class="trainer__seminar__ttl">申込受付中<br class="sp">セミナーはこちら</h2>

        <div class="wrap">
          <ul class="seminar-list">
            <li class="seminar-list__item seminar-list__item--new">
              <a href="#">
                <h3 class="seminar-list__ttl">ここにセミナータイトルがはいります</h3>
                <div class="seminar-list__img">
                  <img src="https://placehold.jp/250x130.png" alt="">
                </div>
                <p>ここにテキストがはいります。ここにテキストがはいります。はいります…</p>
                <time class="seminar-list__time">2020.09.09 18:00</time>
              </a>
            </li>
            <li class="seminar-list__item seminar-list__item--new">
              <a href="#">
                <h3 class="seminar-list__ttl">ここにセミナータイトルがはいります</h3>
                <div class="seminar-list__img">
                  <img src="https://placehold.jp/250x130.png" alt="">
                </div>
                <p>ここにテキストがはいります。ここにテキストがはいります。はいります…</p>
                <time class="seminar-list__time">2020.09.09 18:00</time>
              </a>
            </li>
            <li class="seminar-list__item seminar-list__item--entry">
              <a href="#">
                <h3 class="seminar-list__ttl">ここにセミナータイトルがはいります</h3>
                <div class="seminar-list__img">
                  <img src="https://placehold.jp/250x130.png" alt="">
                </div>
                <p>ここにテキストがはいります。ここにテキストがはいります。はいります…</p>
                <time class="seminar-list__time">2020.09.09 18:00</time>
              </a>
            </li>
          </ul>
        </div>
        <!-- /.wrap -->
      </div>
      <!-- /.trainer__seminar -->

      <div class="wrap">
        <div class="traniner__second__btn">
          <a href="<?php echo esc_url( home_url( '/school/mission-school/' ) ); ?>">実践型スクールの<br>ご紹介はこちら</a>
        </div>
        <!-- /.traniner__contents__btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>


<?php get_footer(); ?>