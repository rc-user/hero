<?php get_header(); ?>



<main id="main">
  <article>
    <section class="mv">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/mv.jpg" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/sp/mv.jpg 640w,<?php echo esc_url(get_template_directory_uri()); ?>/images/front/mv.jpg 960w" alt="mv">
    </section>

    <!---=================================
      SEMINAR
    ==================================--->
    <section class="seminar">
      <div class="wrap">
        <h2 class="front-ttl">SEMINAR</h2>

        <ul class="seminar__list">
          <li>
            <a href="#">
              <div class="seminar__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/seminar.jpg" alt="">
              </div>
              <!-- /.seminar__list__img -->
              <p>ダミーテキストダミーテキストダミー…</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="seminar__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/seminar.jpg" alt="">
              </div>
              <!-- /.seminar__list__img -->
              <p>ダミーテキストダミーテキストダミー…</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="seminar__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/seminar.jpg" alt="">
              </div>
              <!-- /.seminar__list__img -->
              <p>ダミーテキストダミーテキストダミー…</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="seminar__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/seminar.jpg" alt="">
              </div>
              <!-- /.seminar__list__img -->
              <p>ダミーテキストダミーテキストダミー…</p>
            </a>
          </li>
        </ul>
        <!-- /.seminar__list -->

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>">VIEW MORE</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.wrap -->
    </section>


    <!---=================================
      NEWS
    ==================================--->
    <section class="news">
      <div class="wrap">
        <h2 class="front-ttl">NEWS</h2>

        <ul class="news__list">
          <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'posts_per_page' => 3,
              'paged' => $paged,
              'orderby' => 'post_date',
              'order' => 'DESC',
              'post_type' => 'post',
              'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

          <li>
            <time><?php the_time('Y.m.d'); ?></time>
            <h3 class="news__list__ttl"><?php the_title(); ?></h3>
          </li>

          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">VIEW MORE</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.wrap -->
    </section>


    <!---=================================
      OUR VISION
    ==================================--->
    <section class="our">
      <h2 class="our__ttl">誰もがなれる、<br class="sp">そうHEROに。</h2>
      <p>ほんのわずかな希望から<br class="sp">どんな危機的状況も好転させる<br>一人でも多くのHEROを<br class="sp">生み出すために</p>

      <div class="common-btn common-btn--center common-btn--reverse">
        <a href="<?php echo esc_url( home_url( '/concept/' ) ); ?>">OUR VISION</a>
      </div>
      <!-- /.common-btn -->
    </section>


    <!---=================================
      TRAINER
    ==================================--->
    <section class="trainer">
      <div class="wrap">
        <h2 class="front-ttl">TRAINER</h2>

        <ul class="trainer__list">
          <li>
            <a href="<?php echo esc_url( home_url( '/trainer/hisayoshi-yoshitake/' ) ); ?>">
              <div class="trainer__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/yoshitake.jpg" alt="">
              </div>
              <!-- /.trainer__list__img -->

              <div class="trainer__list__txt">
                <p>吉武永賀</p>
              </div>
              <!-- /.trainer__list__txt -->
            </a>
          </li>

          <li>
            <a href="<?php echo esc_url( home_url( '/trainer/yoshizumi-iwasaki/' ) ); ?>">
              <div class="trainer__list__img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/iwasaki.jpg" alt="">
              </div>
              <!-- /.trainer__list__img -->

              <div class="trainer__list__txt">
                <p>岩﨑由純</p>
              </div>
              <!-- /.trainer__list__txt -->
            </a>
          </li>
        </ul>
      </div>
    </section>


    <!---=================================
      SCHOOL
    ==================================--->
    <section class="school">
      <div class="wrap">
        <h2 class="front-ttl">SCHOOL</h2>

        <ul class="school__list">
          <li>
            <a href="<?php echo esc_url( home_url( '/school/mission-school/' ) ); ?>">
              <span>MISSION<br>SCHOOL</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( home_url( '/school/spellbinder-school/' ) ); ?>">
              <span>SPELLBINDER<br>SCHOOL</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.wrap -->
    </section>


    <!---=================================
      BOOKS
    ==================================--->
    <section class="books">
      <div class="wrap">
        <h2 class="front-ttl">BOOKS</h2>

        <ul class="books__list">
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/books.jpg" alt="">
                <figcaption>
                  ダミーテキストダミーテキストダミー…
                </figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/books.jpg" alt="">
                <figcaption>
                  ダミーテキスト
                </figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/books.jpg" alt="">
                <figcaption>
                  ダミーテキストダミーテキストダミー…
                </figcaption>
              </figure>
            </a>
          </li>
          <li>
            <a href="#">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/front/books.jpg" alt="">
                <figcaption>
                  ダミーテキストダミーテキスト
                </figcaption>
              </figure>
            </a>
          </li>
        </ul>

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url( home_url( '/books/' ) ); ?>">VIEW MORE</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.wrap -->
    </section>


    <!---=================================
      YOUTUBE
    ==================================--->
    <section class="youtube">
      <div class="wrap">
        <ul class="youtube__list">
          <li>
            <a href="#">
              <div class="youtube__list__movie">
                <img src="https://placehold.jp/260x220.png" alt="">
              </div>
              <time>2020.09.30</time>
              <h3 class="youtube__list__ttl">ダミーテキストダミーテ…</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキストダ…</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="youtube__list__movie">
                <img src="https://placehold.jp/260x220.png" alt="">
              </div>
              <time>2020.09.30</time>
              <h3 class="youtube__list__ttl">ダミーテキスト</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="youtube__list__movie">
                <img src="https://placehold.jp/260x220.png" alt="">
              </div>
              <time>2020.09.30</time>
              <h3 class="youtube__list__ttl">ダミーテキスト</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="youtube__list__movie">
                <img src="https://placehold.jp/260x220.png" alt="">
              </div>
              <time>2020.09.30</time>
              <h3 class="youtube__list__ttl">ダミーテキスト</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </a>
          </li>
          <li>
            <a href="#">
              <div class="youtube__list__movie">
                <img src="https://placehold.jp/260x220.png" alt="">
              </div>
              <time>2020.09.30</time>
              <h3 class="youtube__list__ttl">ダミーテキスト</h3>
              <p>ダミーテキストダミーテキストダミーテキストダミーテキスト</p>
            </a>
          </li>
        </ul>
      </div>
      <!-- /.wrap -->
    </section>


    <!---=================================
      CONTACT
    ==================================--->
    <section class="contact">
      <div class="wrap">
        <h2 class="front-ttl front-ttl--center">CONTACT</h2>

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">お問い合わせはこちら</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>




<?php get_footer(); ?>