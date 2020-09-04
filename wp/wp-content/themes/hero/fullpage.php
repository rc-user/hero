<?php
/*
Template Name: ヘッダーフッターのみ
*/
?>

<?php get_header(); ?>

<main>
<article class="mb-5">

  <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="wrap">
      <?php if(function_exists('bcn_display')){bcn_display();} ?>
    </div>
  </div>

        
    <!--▼ループ開始--> 
    <?php if (have_posts()) : ?> 
    <?php $paged = get_query_var('paged'); ?><!--ページャー用-->
    <?php query_posts($query_string . "&paged=" .$paged); ?><!--ページャー用--> 
    <?php while (have_posts()) : the_post(); ?>
    <?php remove_filter ('the_content', 'wpautop'); ?><!--エディタに自動生成されるタグを制御--> 

      <?php the_content(); ?><!--固定ページのエディタに貼り付けた内容を出力--> 

    <?php endwhile; ?> 
    <?php else : ?> 


<?php endif; ?> 
<!--▲ループ終了-->
        

    
   
</article>    
  
</main>

<?php get_footer(); ?>