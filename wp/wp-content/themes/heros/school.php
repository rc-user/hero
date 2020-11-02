<?php
/*
Template Name: SCHOOL下層ページ用
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

    <div class="wrap">
      <section class="school__second">
        <div class="school__second__mv">
          <h1 class="school__second__mv__ttl">
            <?php
            $title = get_the_title($ID);
            $title = str_replace(" ", "<br>", $title);
            echo $title;
            ?>
          </h1>
          <div class="school__second__mv__img">
            <?php the_post_thumbnail('full'); ?>
          </div>
          <!-- /.school__second__mv__img -->
        </div>
        <!-- /.school__second__mv -->


        <div class="school__contents">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile;
          else : ?>
          <?php endif; ?>

          <?php if (get_field('url')) : ?>
            <div class="school__contents__btn common-btn common-btn--center common-btn--large">
              <a href="<?php the_field('url'); ?>" target="_blank">詳しいご案内はこちら</a>
            </div>
            <!-- /.school__contents__btn -->
          <?php endif; ?>
        </div>
        <!-- /.school__contents -->

      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>