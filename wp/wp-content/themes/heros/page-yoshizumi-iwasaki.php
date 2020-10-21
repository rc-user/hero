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
              岩﨑 由純<span>YOSHIZUMI IWASAKI</span>
            </h1>
            <p>ＮＥＣレッドロケッツ現コンディショニングアドバイザー<br>一般財団法人日本ペップトーク普及協会 代表理事<br>(株)日本コアコンディショニング協会 会長</p>
          </div>
          <!-- /.trainer__second__profile__txt -->
        </div>
        <!-- /.trainer__second__profile -->

        <div class="traniner__contents">
          <h2>スペルバインダーを育てる</h2>
          <p>スペルバインダーとは「自らの言葉で人々に伝え、魅了する者」です。過去トレーナーとして選手を勇気づけ、やる気を高め、より高いパフォーマンスをサポートする。私はそのような仕事を長年してきました。言葉には重みがあり魔力があり人を駆り立てる力があります。この「言葉」の連鎖からよい環境・よい人生を形作る輪を広めていきたいのです。</p>

          <h2>言葉遣い、正しい伝え方</h2>
          <p>人を思わずやる気にさせる話し方を私は「ペップトーク」と呼んでいます。落ち込んでいる時、自信がない時、人の背中をポンと押してあげる。そのためには適切な言葉遣いと正しい言葉の伝え方があるのです。ペップトークがスペルバインダーの根幹ともいえるでしょう。</p>

          <h2>日常のアウトプットで高める</h2>
          <p>ペップトークは何も勇気づけるための限定的なものではありません。日常生活で説得をする場面、ビジネスでの提案の機会、自分の子供や部下を動かすマネジメント様々な場面で人を動かし前にすすめることができる技術です。共に学習し、アウトプットし、体現していく。そのような支援をしていきたいのです。</p>

          <iframe class="traniner__contents__movie" width="800" height="460" src="https://www.youtube.com/embed/reIVDupU7vc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
          <a href="<?php echo esc_url( home_url( '/school/spellbinder-school/' ) ); ?>">実践型スクールの<br>ご紹介はこちら</a>
        </div>
        <!-- /.traniner__contents__btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>


<?php get_footer(); ?>