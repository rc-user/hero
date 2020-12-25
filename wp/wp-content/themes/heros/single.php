<?php get_header(); ?>

<style>
  .media_wrap{
    max-width: 800px;
    margin: 0 auto;
    padding: 0 15px;
  }
  
  .media_wrap *{
    line-height: 3;
  }
  
  .media_wrap h1{
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 30px;
    line-height: 1.4;
  }
  .wp-block-embed-youtube{
    text-align: center;
  }
  
  .media_wrap img{
    width: 100%;
    height: auto;
  }

</style>



<main id="main">
  <article>
    <div class="media_wrap">
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
    </div>  
  </article>
</main>


<?php get_footer(); ?>