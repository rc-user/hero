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
      <section class="news__contents">
        <ul class="news__list">
          <?php
            $paged = (int) get_query_var('paged');
            $args = array(
              'posts_per_page' => 10,
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
            <div class="news__list__time">
              <time><?php the_time('Y.m.d'); ?></time>
            </div>

            <div class="news__list__txt">
              <h2 class="news__list__ttl"><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
          </li>


          <?php endwhile; endif; ?>

          <?php wp_reset_postdata(); ?>
        </ul>

        <?php
          $big = 999999999; // need an unlikely integer

          echo paginate_links( array(
          'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format' => '?paged=%#%',
          'current' => max( 1, get_query_var('paged') ),
          'total' => $the_query->max_num_pages
          ) );
        ?>
      </section>
    </div>
  </article>
</main>


<?php get_footer(); ?>