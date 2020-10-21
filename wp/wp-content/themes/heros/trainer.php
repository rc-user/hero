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
            <h1 class="trainer__second__mv__ttl">
              吉武 永賀<span></span>
            </h1>
          </div>
          <!-- /.trainer__second__profile__txt -->
        </div>
        <!-- /.trainer__second__profile -->

        <div class="traniner__contents">
          <?php if(have_posts()):while(have_posts()):the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile;else: ?>
          <?php endif; ?>
        </div>
        <!-- /.traniner__contents -->
      </div>
      <!-- /.trainer__second__wrap -->

      <div class="traniner__second__btn">
        <a href="#">実践型スクールの<br>ご紹介はこちら</a>
      </div>
      <!-- /.traniner__contents__btn -->
    </section>
  </article>
</main>


<?php get_footer(); ?>