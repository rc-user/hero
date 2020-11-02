<?php get_header(); ?>

<main id="main">
  <article>
    <section class="second__mv">
      <h1 class="second__mv__ttl">
        <?php the_title(); ?>
      </h1>
      <div class="second__mv__img">
        <?php the_post_thumbnail('full'); ?>
      </div>
    </section>

    <div class="wrap">
      <section class="concept__contents">
        <h2 class="concept__ttl">誰もがなれる、<br class="sp">そうHEROに。</h2>
        <p>自分の「好きで得意」を活かして<br class="sp">ミッションに生きる<br>家族に誇らしく、豊かで幸せな<br class="sp">人生を生きる<br>自分の生き様を通して、雄弁に語り、<br class="sp">人々を勇気づける</p>

        <p>人はみな、固有のHEROとなる<br class="sp">原石であり、<br class="pc">光り輝くための<br class="sp">環境・知識・努力をもってして、</p>

        <p>誰もがいつからでもオリジナルの<br class="sp">HEROになれる。<br>そうあなたも今ここから<br class="sp">スタートできるのです。</p>

        <h2 class="concept__ttl">HEROに育つ<br class="sp">最高の環境を。</h2>
        <p>HEROとなる最短の方法は<br class="sp">HEROに出会うことです。<br>ここ「THE HERO TRAINING」では、過去20年に渡り、HEROを何人も育成し、<br>自身もHEROとして生きるトレーナーが<br class="sp">実績に基づいた確かな情報を<br class="sp">発信しています。<br>出会う、知る、再現する、磨き上げる、<br class="sp">そして独自のHEROとなる</p>


        <div class="concept__trainer">
          <h2 class="concept__trainer__ttl">あなたをHEROにする<br>最高のトレーナー陣</h2>

          <ul class="concept__trainer__list">
            <li>
              <div class="concept__trainer__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/yoshitake.jpg" alt="">
              </div>
              <!-- /.concept__trainer__list__img -->

              <div class="concept__trainer__list__flex">
                <div class="concept__trainer__list__txt">
                  <h3 class="concept__trainer__list__name">吉武 永賀<span>HISAYOSHI YOSHITAKE</span></h3>
                  <p>ミッションを通じ、<br>あなたの価値を最大化する</p>
                </div>
                <!-- /.concept__trainer__list__txt -->
                
                <ul class="concept__trainer__list__btn">
                  <li class="common-btn common-btn--large"><a href="<?php echo esc_url( home_url( '/trainer/hisayoshi-yoshitake/' ) ); ?>">PROFILE</a></li>
                  <li class="common-btn common-btn--large"><a href="<?php echo esc_url( home_url( '/school/mission-school/' ) ); ?>">MISSION SCHOOL</a></li>
                </ul>
              </div>
              <!-- /.concept__trainer__list__flex -->
            </li>

            <li>
              <div class="concept__trainer__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/iwasaki.jpg" alt="">
              </div>
              <!-- /.concept__trainer__list__img -->

              <div class="concept__trainer__list__flex">
                <div class="concept__trainer__list__txt">
                  <h3 class="concept__trainer__list__name">岩﨑 由純<span>YOSHIZUMI IWASAKI</span></h3>
                  <p>人を動かす「言葉」を通じ、<br>生活をより豊かにする</p>
                </div>
                <!-- /.concept__trainer__list__txt -->
                
                <ul class="concept__trainer__list__btn">
                  <li class="common-btn common-btn--large"><a href="<?php echo esc_url( home_url( '/trainer/yoshizumi-iwasaki/' ) ); ?>">PROFILE</a></li>
                  <li class="common-btn common-btn--large"><a href="<?php echo esc_url( home_url( '/school/spellbinder-school/' ) ); ?>">SPELLBINDER SCHOOL</a></li>
                </ul>
              </div>
              <!-- /.concept__trainer__list__flex -->
            </li>
          </ul>
        </div>
      </section>
    </div>
  </article>
</main>


<?php get_footer(); ?>