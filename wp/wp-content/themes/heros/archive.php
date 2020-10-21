
<?php get_header(); ?>

<main id="main">
  <article>
    <section class="page__mv">
      <h1 class="page__mv__ttl page__mv__ttl--single">
        <span><?php the_archive_title(); ?></span>
      </h1>
      <div class="page__mv__img">
        <?php the_post_thumbnail('full'); ?>
      </div>
    </section>

    <nav class="breadcrumbs">
      <div class="breadcrumbs__list" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
          bcn_display();
        }?>
      </div>
    </nav>

    <section class="archive__wrap">
      <h2 class="archive__ttl"><span><?php the_archive_title(); ?></span></h2>
      <ul class="archive__list
        ">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <li>
          <time><?php the_time('Y.m.d'); ?></time>
          <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
        </li>
        <?php endwhile; endif; ?>
        <?php wp_reset_query();?>
      </ul>
    </section>
  </article>
</main>


<?php get_footer(); ?>