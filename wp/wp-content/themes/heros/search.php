<?php include("header-archive.php"); ?>
<main id="main">
  <article>
    <nav class="archive__nav">
      <div class="archive__nav__wrap">
        <ul class="archive__nav__list">
          <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'genre')); ?>
        </ul>


        <div class="archive__nav__search">
          <form method="get" action="<?php bloginfo( 'url' ); ?>">
            <input type="hidden" name="post_type" value="contents">
            <input name="s" id="s" type="text" placeholder="キーワード" />
            <input id="submit" type="submit" value="検索する" />
          </form>
        </div>
        <!-- /.archive__nav__search -->
      </div>
      <!-- /.archive__nav__wrap -->
    </nav>


    <div class="archive__col">
      <section class="archive__main">
        <ul class="contents-post-list">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <li class="contents-post-list__item">
              <a href="<?php the_permalink(); ?>">
                <div class="contents-post-list__img">
                  <?php the_post_thumbnail('full'); ?>
                  <div class="contents-post-list__view">
                    <span><?php echo getPostViews(get_the_ID()); ?></span>
                  </div>
                </div>
                <div class="contents-post-list__info">
                  <ul class="contents-post-list__category">
                    <?php
                      if ($terms = get_the_terms($post->ID, 'genre')) {
                        foreach ( $terms as $term ) {
                          echo ('<li>') ;
                          echo esc_html($term->name)  ;
                          echo ('</li>') ;
                        }
                      }
                    ?>
                  </ul>
                  <time><?php the_time('Y.m.d'); ?></time>
                </div>
                <h3 class="contents-post-list__ttl"><?php echo mb_substr($post->post_title, 0, 20); ?></h3>
                <p class="contents-post-list__txt"><?php echo mb_substr(get_the_excerpt(), 0, 54).'…'; ?></p>
              </a>
            </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_postdata(); ?>
        </ul>

        <div class="archive__pagination">
          <?php
            echo paginate_links(array(
              'type' => 'list',
              'next_text' => '',
              'prev_text' => ''
            ));
          ?>
        </div>
        <!-- /.archive__pagination -->
      </section>

      <?php include("template/media-side.php"); ?>
    </div>
    <!-- /.archive__col -->
  </article>
</main>


<?php get_footer(); ?>