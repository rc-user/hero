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
              岩﨑 由純<span>YOSHIZUMI IWASAKI</span>
            </h1>
            <p>ＮＥＣレッドロケッツ現コンディショニングアドバイザー<br>一般財団法人日本ペップトーク普及協会 代表理事<br>(株)日本コアコンディショニング協会 会長</p>
          </div>
          <!-- /.trainer__second__profile__txt -->
        </div>
        <!-- /.trainer__second__profile -->

        <div class="traniner__contents">
          <h2>スペルバインダーを育てる</h2>
          <p>スペルバインダーとは「自らの言葉で人々に伝え、魅了する者」です。過去トレーナーとして選手を勇気づけ、やる気を高め、より高いパフォーマンスをサポートする。私はそのような仕事を長年してきました。言葉には重みがあり魔力があり人を駆り立てる力があります。この「言葉」の連鎖からよい環境・よい人生を形作る輪を広めていきたいのです。</p>

          <h2>言葉遣い、正しい伝え方</h2>
          <p>人を思わずやる気にさせる話し方を私は「ペップトーク」と呼んでいます。落ち込んでいる時、自信がない時、人の背中をポンと押してあげる。そのためには適切な言葉遣いと正しい言葉の伝え方があるのです。ペップトークがスペルバインダーの根幹ともいえるでしょう。</p>

          <h2>日常のアウトプットで高める</h2>
          <p>ペップトークは何も勇気づけるための限定的なものではありません。日常生活で説得をする場面、ビジネスでの提案の機会、自分の子供や部下を動かすマネジメント様々な場面で人を動かし前にすすめることができる技術です。共に学習し、アウトプットし、体現していく。そのような支援をしていきたいのです。</p>

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
                  'terms' => 'iwasaki', //表示したいタームをスラッグで指定
                  'operator' => 'IN'
                ),
              ),
              'meta_key' => 'label',
              'meta_value' => $label
            );
            $myposts = get_posts($args);
            if ($myposts) : foreach ($myposts  as $post) : setup_postdata($post);
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
                      if (mb_strlen(get_the_excerpt()) > 37) {
                        $title = mb_substr(get_the_excerpt(), 0, 37);
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
            <?php wp_reset_postdata();
            endif; ?>
          </ul>
        </div>
        <!-- /.wrap -->
      </div>
      <!-- /.trainer__seminar -->

      <div class="wrap">
        <div class="traniner__second__btn">
          <a href="<?php echo esc_url(home_url('/school/spellbinder-school/')); ?>">実践型スクールの<br>ご紹介はこちら</a>
        </div>
        <!-- /.traniner__contents__btn -->
      </div>
      <!-- /.wrap -->
    </section>
  </article>
</main>


<?php get_footer(); ?>