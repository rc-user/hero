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
      <section class="school__top">
        <p class="school__catch">あなたをHEROまで導く<br>最高のトレーナーが<br class="sp">提供する<br class="pc">人数限定の<br class="sp">マンツーマン実践講座です。</p>

        <ul class="school__list">
          <li>
            <iframe class="school__list__video" width="800" height="460" src="https://www.youtube.com/embed/AM34dqFxjDI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <div class="school__list__btn">
              <a href="<?php echo esc_url( home_url( '/school/mission-school' ) ); ?>">MISSION <br class="sp">SCHOOL</a>
            </div>
            <!-- /.school__list__btn -->
          </li>
          <li>
            <iframe class="school__list__video" width="800" height="460" src="https://www.youtube.com/embed/reIVDupU7vc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="school__list__btn">
              <a href="<?php echo esc_url( home_url( '/school/spellbinder-school' ) ); ?>">SPELLBINDER <br class="sp">SCHOOL</a>
            </div>
            <!-- /.school__list__btn -->
          </li>
        </ul>
      </section>
    </div>
    <!-- /.wrap -->
  </article>
</main>


<?php get_footer(); ?>