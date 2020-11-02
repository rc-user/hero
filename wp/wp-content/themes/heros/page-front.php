<?php get_header(); ?>



<main id="main">
  <article>
    <section class="mv">
      <!-- <img src="<?php the_field('mv_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_sp'); ?> 640w,<?php the_field('mv_pc'); ?> 960w" alt="mv"> -->

      <?php if (get_field('mv_01_pc')) : ?>
        <div>
          <img src="<?php the_field('mv_01_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_01_sp'); ?> 640w,<?php the_field('mv_01_pc'); ?> 960w" alt="mv">
        </div>
      <?php endif; ?>

      <?php if (get_field('mv_02_pc')) : ?>
        <div>
          <img src="<?php the_field('mv_02_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_02_sp'); ?> 640w,<?php the_field('mv_02_pc'); ?> 960w" alt="mv">
        </div>
      <?php endif; ?>

      <?php if (get_field('mv_03_pc')) : ?>
        <div>
          <img src="<?php the_field('mv_03_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_03_sp'); ?> 640w,<?php the_field('mv_03_pc'); ?> 960w" alt="mv">
        </div>
      <?php endif; ?>

      <?php if (get_field('mv_04_pc')) : ?>
        <div>
          <img src="<?php the_field('mv_04_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_04_sp'); ?> 640w,<?php the_field('mv_04_pc'); ?> 960w" alt="mv">
        </div>
      <?php endif; ?>

      <?php if (get_field('mv_05_pc')) : ?>
        <div>
          <img src="<?php the_field('mv_05_pc'); ?>" sizes="(max-width: 640px) 50vw, 960px" srcset="<?php the_field('mv_05_sp'); ?> 640w,<?php the_field('mv_05_pc'); ?> 960w" alt="mv">
        </div>
      <?php endif; ?>
    </section>

    <!---=================================
      SEMINAR
    ==================================--->
    <section class="seminar">
      <div class="wrap">
        <h2 class="front-ttl">SEMINAR</h2>

        <ul class="seminar__list">
          <?php global $post;
          $args = array(
            'posts_per_page' => 4, //記事数
            'post_status' => 'publish', //公開記事のみ
            'post_type' => 'post-seminar',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $myposts = get_posts($args);
          if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
          ?>
              <li>
                <a href="<?php the_field('url'); ?>">
                  <div class="seminar__list__img">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                  <!-- /.seminar__list__img -->

                  <p>
                    <?php
                    if (mb_strlen($post->post_title) > 21) {
                      $title = mb_substr($post->post_title, 0, 21);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </p>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else : ?>
          <?php wp_reset_postdata();
          endif; ?>
        </ul>
        <!-- /.seminar__list -->

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url(home_url('/seminar/')); ?>">VIEW MORE</a>
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
          $args = array(
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
          ?>

              <li>
                <time><?php the_time('Y.m.d'); ?></time>
                <h3 class="news__list__ttl"><?php the_title(); ?></h3>
              </li>

          <?php endwhile;
          endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url(home_url('/news/')); ?>">VIEW MORE</a>
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
        <a href="<?php echo esc_url(home_url('/concept/')); ?>">OUR VISION</a>
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
            <a href="<?php echo esc_url(home_url('/trainer/hisayoshi-yoshitake/')); ?>">
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
            <a href="<?php echo esc_url(home_url('/trainer/yoshizumi-iwasaki/')); ?>">
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
            <a href="<?php echo esc_url(home_url('/school/mission-school/')); ?>">
              <span>MISSION<br>SCHOOL</span>
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url(home_url('/school/spellbinder-school/')); ?>">
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
          <?php global $post;
          $args = array(
            'posts_per_page' => 4, //記事数
            'post_status' => 'publish', //公開記事のみ
            'post_type' => 'post-books',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $myposts = get_posts($args);
          if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
          ?>
              <li>
                <figure>
                  <?php the_post_thumbnail('full'); ?>
                  <figcaption>
                    <?php
                    if (mb_strlen($post->post_title) > 19) {
                      $title = mb_substr($post->post_title, 0, 19);
                      echo $title . '...';
                    } else {
                      echo $post->post_title;
                    }
                    ?>
                  </figcaption>
                </figure>
              </li>
            <?php endforeach; ?>
          <?php else : ?>
          <?php wp_reset_postdata();
          endif; ?>
        </ul>

        <div class="common-btn common-btn--center">
          <a href="<?php echo esc_url(home_url('/books/')); ?>">VIEW MORE</a>
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
        <h2 class="front-ttl front-ttl--white">MEDIA</h2>
        <ul class="youtube__list">
          <?php global $post;
          $args = array(
            'posts_per_page' => 6, //記事数
            'post_status' => 'publish', //公開記事のみ
            'post_type' => 'post-movie',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          $myposts = get_posts($args);
          if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
          ?>
              <li>
                <a href="<?php the_field('movie_url'); ?>">
                  <div class="youtube__list__movie">
                    <?php echo $embed_code = wp_oembed_get(get_field('movie_url')); ?>
                  </div>
                  <time><?php the_time('Y.m.d'); ?></time>
                  <h3 class="youtube__list__ttl"><?php the_title() ?></h3>
                  <?php the_content() ?>
                </a>
              </li>
            <?php endforeach; ?>
          <?php else : ?>
          <?php wp_reset_postdata();
          endif; ?>
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

        <div class="common-btn common-btn--center common-btn--large">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせはこちら</a>
        </div>
        <!-- /.common-btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>




<?php get_footer(); ?>