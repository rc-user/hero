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
            <h1 class="trainer__second__profile__name">
              吉武 永賀<span>HISAYOSHI YOSHITAKE</span>
            </h1>
            <p>ストレッチポール®創業者<br>株式会社LPN代表取締役<br>(株)日本コアコンディショニング協会 名誉理事<br>ビジネスコーチ / ミッショントレーナー</p>
          </div>
          <!-- /.trainer__second__profile__txt -->
        </div>
        <!-- /.trainer__second__profile -->

        <div class="traniner__contents">
          <h2>ミッションに生きる</h2>
          <p>ミッションに生きるとは、「自分らしい人生を生きること」です。そしてこのミッションを私は「好きで得意」と定義しました。好きで得意なことは、継続や貢献につながり、誇らしい自分だけの人生を描く礎になることでしょう。</p>

          <h2>好きで得意を見つける</h2>
          <p>好きで得意なことを自分の仕事にできたとしたら、どれだけ自分の人生が豊かになるのでしょうか。ではあなた自身の「好きで得意」なことは何でしょうか。まずは見つけるところから「ミッションに生きる」ことは始まります。</p>

          <h2>併走するパートナーとして</h2>
          <p>あなたの今の「好きで得意」は過去の人生のどこから来るのでしょうか。あなたは何故存在し、今まさにどのような価値を秘めているのかそして見つけた価値を強みにしてどのように想いのまま表現するのか、一人で気づき深めることが難しいからこそパートナーやメンターの存在が重要です。ミッショントレーナーはそのようなあなたのパートナーとして、最大限あなたの価値を引き出し、高め続けます。</p>

          <iframe class="traniner__contents__movie" width="800" height="460" src="<?php the_field('movie_url'); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- /.traniner__contents -->
      </div>
      <!-- /.trainer__second__wrap -->

      <div class="trainer__seminar">
        <h2 class="trainer__seminar__ttl">申込受付中<br class="sp">セミナーはこちら</h2>

        <div class="wrap">
          <ul class="seminar-list">
            <?php global $post;
            $label = array('new', 'entry');
            $args = array( 
              'posts_per_page' => 3, //記事数
              'post_status' => 'publish', //公開記事のみ
              'post_type' => 'post-seminar',
              'orderby' => 'date',
              'order' => 'DESC',
              'tax_query' => array(
                  array(
                      'taxonomy' => 'taxonomy-seminar', //タクソノミーを指定
                      'field' => 'slug', //ターム名をスラッグで指定する
                      'terms' => 'yoshitake', //表示したいタームをスラッグで指定
                      'operator' => 'IN'
                  ),
                ),
                'meta_key' => 'label',
                'meta_value' => $label
              );
              $myposts = get_posts( $args );
              if($myposts ) : foreach( $myposts  as $post ) : setup_postdata($post);
            ?>
            <li class="seminar-list__item <?php
                $like_fruits = get_field('label');
                if ($like_fruits == 'new') { ?>
                  seminar-list__item--new
                <?php } elseif ($like_fruits == 'entry') { ?>
                  seminar-list__item--entry
                <?php } elseif ($like_fruits == 'end') { ?>
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
            <?php wp_reset_postdata(); endif; ?>
          </ul>
        </div>
        <!-- /.wrap -->
      </div>
      <!-- /.trainer__seminar -->

      <div class="wrap">
        <div class="traniner__second__btn">
          <a href="<?php echo esc_url( home_url( '/school/mission-school/' ) ); ?>">実践型スクールの<br>ご紹介はこちら</a>
        </div>
        <!-- /.traniner__contents__btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>


<?php get_footer(); ?>