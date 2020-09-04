<?php get_header(); ?>
 
  
<main class="pages">
<article class="mb-5">
  <div class="jumbotron jumbotron-fluid text-center page_header">
     <p class="sub_ttl">Media Library</p>    
     <div class="ttl">メディアライブラリー</div>
  </div>
  
  <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="wrap">
      <?php if(function_exists('bcn_display')){bcn_display();} ?>
    </div>
  </div>
 

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12 main_col">
        
        <section class="single">
          <h1><?php echo get_the_title(); ?></h1>
          <div class="day"><?php the_time( 'Y.m.d' ); ?></div>
          
        <!--▼ループ開始--> 
        <?php if (have_posts()) : ?> 
        <?php $paged = get_query_var('paged'); ?><!--ページャー用-->
        <?php query_posts($query_string . "&paged=" .$paged); ?><!--ページャー用--> 
        <?php while (have_posts()) : the_post(); ?>
        <?php remove_filter ('the_content', 'wpautop'); ?><!--エディタに自動生成されるタグを制御--> 

          <?php the_content(); ?><!--固定ページのエディタに貼り付けた内容を出力--> 

        <?php endwhile; ?> 
        <?php else : ?> 


          <div> 
            <div class="titlebar"> 
              <h2>Page Not Found.</h2> 
            </div>
            <p>申し訳ありませんが、ページが見つかりません。<br /><a href="<?php echo home_url(); ?>/">こちら</a>からTOPページへお戻りください。</p>
          </div> 

        <?php endif; ?> 
        <!--▲ループ終了-->
                   

        <?php if (get_post_type() === 'library'): ?>
          <div class="btn_type01 mt-5">
            <a href="<?php echo home_url(); ?>/contact/"><i class="fas fa-envelope"></i>お問い合わせはこちら</a>
          </div>          
          
          
        <?php  
        if ( class_exists( 'Vk_Post_Author_Box' ) ) {
          echo Vk_Post_Author_Box::pad_get_author_box();
        }
        ?>
        <?php endif; ?>  
          
        </section>  

      </div>
      <!--main_col-->
      
      <?php get_sidebar(); ?>
    
    </div>
  </div>
    
   
</article>  
 
  
</main>

<?php get_footer(); ?>