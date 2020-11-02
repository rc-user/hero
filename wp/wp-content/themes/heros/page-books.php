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
      <section class="books__contents">
        <h2 class="books__ttl">ダウンロード<br class="sp">可能資料一覧</h2>

        <ul class="books__list">
          <?php global $post;
            $args = array( 
              'posts_per_page' => 100, //記事数
              'post_status' => 'publish', //公開記事のみ
              'post_type' => 'post-books',
              'orderby' => 'date',
              'order' => 'DESC'
              );
              $myposts = get_posts( $args );
              if($myposts ) : foreach( $myposts  as $post ) : setup_postdata($post);
          ?>

          <li class="books__list__item">
            <div class="books__list__img">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <!-- /.books__list__img -->
            
            <div class="books__list__txt">
              <?php if(get_field('release')): ?>
                <time><?php the_field('release'); ?></time>
              <?php endif; ?>

              <h3 class="books__list__ttl">
                <?php the_title(); ?>
              </h3>
              <ul class="books__list__data">
                <?php if(get_field('author')): ?>
                  <li><?php the_field('author'); ?> 著</li>
                <?php endif; ?>

                <?php if(get_field('price')): ?>
                  <li>定価：<?php
                    if(get_post_meta($post->ID , 'price' ,true)):
                    $num = get_post_meta($post->ID , 'price' ,true);
                    echo number_format( $num ) ;
                    endif; ?>円＋税</li>
                <?php endif; ?>

                <?php if(get_field('publisher')): ?>
                  <li>出版：<?php the_field('publisher'); ?></li>
                <?php endif; ?>
              </ul>
              
              <?php the_content(); ?>

              <?php if(get_field('btn_url')): ?>
                <div class="books__list__btn common-btn common-btn--dark">
                  <a href="<?php the_field('btn_url'); ?>" target="<?php
                $select = get_field('window');
                if ($select == 'true') { ?>_blank<?php } else { ?>_parent<?php } ?>"><?php the_field('btn_name'); ?></a>
                </div>
                <!-- /.books__list__btn -->
              <?php endif; ?>
            </div>
            <!-- /.books__list__txt -->
          </li>

          <?php endforeach; ?>
          <?php else : ?>
          <?php wp_reset_postdata(); endif; ?>
        </ul>
      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>