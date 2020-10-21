<?php get_header(); ?>

<main id="main">
  <article>
    <section class="page__mv">
      <h1 class="page__mv__ttl">
        <?php the_title(); ?>
      </h1>
    </section>


    <section class="page__contents">
      <?php if(have_posts()):while(have_posts()):the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile;else: ?>
      <?php endif; ?>
    </section>
  </article>
</main>


<?php get_footer(); ?>