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
      <section class="contact__contents">
        
      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>