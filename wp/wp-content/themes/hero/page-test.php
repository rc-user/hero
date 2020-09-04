<?php get_header(); ?>

<main class="pages">
<article class="mb-5">
  <div class="jumbotron jumbotron-fluid text-center page_header">
     <p class="sub_ttl"><?php echo get_post_meta($post->ID , 'subtitle' ,true); ?></p>    
     <div class="ttl"><?php echo get_the_title(); ?></div>
  </div>

  <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="wrap">
      <?php if(function_exists('bcn_display')){bcn_display();} ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12 main_col">
        
    <!--▼ループ開始--> 
    <?php if (have_posts()) : ?> 
    <?php $paged = get_query_var('paged'); ?><!--ページャー用-->
    <?php query_posts($query_string . "&paged=" .$paged); ?><!--ページャー用--> 
    <?php while (have_posts()) : the_post(); ?>
    <?php remove_filter ('the_content', 'wpautop'); ?><!--エディタに自動生成されるタグを制御--> 

      <?php the_content(); ?><!--固定ページのエディタに貼り付けた内容を出力--> 

    <?php endwhile; ?> 
    <?php else : ?> 

<section>
  <div> 
    <div class="titlebar"> 
      <h2>Page Not Found.</h2> 
    </div>
    <p>申し訳ありませんが、ページが見つかりません。<br /><a href="<?php echo home_url(); ?>/">こちら</a>からTOPページへお戻りください。</p>
  </div> 
</section> 

<?php endif; ?> 
<!--▲ループ終了-->
        
      </div>
      <!--main_col-->
      
      <?php get_sidebar(); ?>
    
    </div>
  </div>
    
   
</article>    
  
</main>

<?php get_footer(); ?>