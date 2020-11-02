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
      <section class="seminar__contents">
        <h2 class="seminar__ttl">HEROに近づく、<br>理解の深まるセミナーを<br class="sp">開催しています。</h2>
        <ul class="seminar-list">
          <?php global $post;
            $paged = get_query_var('paged') ?: 1; //ページネーション
            $args = array( 
              'paged' => $paged, //ページネーション
              'posts_per_page' => 24, //記事数
              'post_status' => 'publish', //公開記事のみ
              'post_type' => 'post-seminar',
              'orderby' => 'date',
              'order' => 'DESC'
              );
              $myposts = get_posts( $args );
              if($myposts ) : foreach( $myposts  as $post ) : setup_postdata($post);
          ?>
            <li class="seminar-list__item <?php
                $label = get_field('label');
                if ($label == 'new') { ?>
                  seminar-list__item--new
                <?php } elseif ($label == 'entry') { ?>
                  seminar-list__item--entry
                <?php } elseif ($label == 'end') { ?>
                  seminar-list__item--end
                <?php } else { ?>
                <?php } ?>">

              <a href="<?php the_field('url'); ?>" target="_blank">
                <h3 class="seminar-list__ttl"><?php the_title(); ?></h3>
                <div class="seminar-list__img">
                  <?php the_post_thumbnail('full'); ?>
                </div>
                <p>
                  <?php
                  if(mb_strlen(get_the_excerpt())>37) {
                    $title= mb_substr(get_the_excerpt(),0,37) ;
                      echo $title . '…';
                    } else {
                      echo get_the_excerpt();
                    }
                  ?>
                </p>

                <time class="seminar-list__time"><?php the_field('day'); ?> <?php the_field('time'); ?></time>
              </a>
            </li>

          <?php endforeach; ?>

          <?php else : ?>

            <div class="result">
              <p>セミナーがまだありません</p>
            </div>

          <?php wp_reset_postdata(); endif; ?>
        </ul>
      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>