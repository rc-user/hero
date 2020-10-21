<aside class="media-side">
  <h2 class="media-side__ttl media-side__ttl--ranking"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_ranking.svg" width="32" height="25" alt="">RANKING</h2>

  <ol class="media-side__ranking">
    <?php $args = array(
        'numberposts'      => 10,
        'meta_key'         => 'post_views_count',
        'orderby'          => 'meta_value_num',
        'post_type'        => 'contents',
      );
      $posts_array_ranking = get_posts( $args );
    ?>
    <?php foreach ($posts_array_ranking as $post):setup_postdata($post); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <div class="media-side__ranking__img">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="media-side__ranking__txt">
          <p><?php the_title(); ?></p>
          <div class="media-side__ranking__view">
            <span><?php echo getPostViews(get_the_ID()); ?></span>
          </div>
          <!-- /.media-side__ranking__view -->
        </div>
        <!-- /.side__ranking__txt -->
      </a>
    </li>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </ol>

  <h2 class="media-side__ttl media-side__ttl--word"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_word.svg" width="28" height="29" alt="">人気キーワード</h2>
  <ul class="media-side__word">
    <li>
      <a href="/?post_type=contents&s=%E3%82%B3%E3%83%A9%E3%83%BC%E3%82%B2%E3%83%B3">コラーゲン</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E4%B9%B3%E9%85%B8%E8%8F%8C">乳酸菌</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E8%AA%BF%E7%90%86%E6%B3%95">調理法</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E6%91%82%E5%8F%96%E7%9B%AE%E5%AE%89%E9%87%8F">摂取目安量</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E3%83%92%E3%82%A2%E3%83%AB%E3%83%AD%E3%83%B3%E9%85%B8">ヒアルロン酸</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E3%83%93%E3%82%BF%E3%83%9F%E3%83%B3">ビタミン</a>
    </li>
    <li>
      <a href="/?post_type=contents&s=%E4%BF%9D%E5%AD%98%E6%B3%95">保存法</a>
    </li>
  </ul>

  <h2 class="media-side__ttl media-side__ttl--category"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_category.svg" width="23" height="29" alt="">おすすめ記事</h2>
  <ul class="media-side__category">
    <?php $args = array(
        'numberposts'      => 5,
        'meta_key'         => 'post_views_count',
        'orderby'          => 'rand',
        'post_type'        => 'contents',
      );
      $posts_array_ranking = get_posts( $args );
    ?>
    <?php foreach ($posts_array_ranking as $post):setup_postdata($post); ?>
    <li><a href="<?php the_permalink(); ?>"><?php echo mb_substr($post->post_title, 0, 10).'…'; ?></a></li>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
  </ul>

  <div class="media-side__cart">
    <a href="https://shop.naniwasupli.com/merchandises/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon_cart_white.svg" width="32" height="31" alt="">お買い物ページはこちら</a>
  </div>
  <!-- /.media-side__cart -->
</aside>