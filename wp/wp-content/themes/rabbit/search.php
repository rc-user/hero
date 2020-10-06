<?php get_header(); ?>

<main class="pages">
<article class="mb-5">
  <div class="jumbotron jumbotron-fluid text-center page_header">
     <p class="sub_ttl">Search Results</p>    
     <div class="ttl"><?php echo get_search_query(); ?>の検索結果</div>
  </div>
  
  <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="wrap">
      <?php if(function_exists('bcn_display')){bcn_display();} ?>
    </div>
  </div>
 
  <div class="container">
    <div class="row">
      
    <!--▼ループ開始-->
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="col-12 col-md-4 mb-4">
        <div class="card shadow-sm">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <div class="card-body px-2 py-3">

            
<?php
    if ($terms = get_the_terms($post->ID, 'depart')) {
        foreach ( $terms as $term ) {
            $term_slug = $term -> slug;
            echo ('<span class="') ;
            echo esc_html($term_slug) ;
            echo ('">') ;
            echo '<a href="'.get_term_link($term->slug, 'depart').'">'.$term->name.'</a>';
            echo ('</span>') ;
        }
    }
?>            
            
            <h5 class="fw_bold mb-2"><?php the_title(); ?></h5>
            <p class="mb-2"><?php the_excerpt(); ?></p>
            <div class="btn_type02"><a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-sm">more</a></div>
            <div class="day"><?php the_time( 'Y.m.d' ); ?></div>

          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div><!-- /.col-12 col-md-4 -->

    <?php endwhile; ?>
    <?php else : ?>

      <p>検索条件にヒットした記事がありませんでした。</p>

    <?php endif; ?>
    <!--▲ループ終了-->      

    </div><!-- /.row -->
    
    <?php wp_pagenavi(); ?>
    
    
  </div>
    
   
</article>  
  <section class="foot_bn_area">
    <div class="row m-0">
      <div class="col-md-6 bn_block01">
        <a href="https://www.15w.jp/" target="_blank">
          <div class="bn_box">
            <div class="name">
              <div id="bell" class="mr-2"></div>
              <h4 class="fw_bold">ラビットプロデュース</h4>
            </div>            
            <p class="fs_bigger200">ハイエンド<br>ブライダル事業</p>
          </div>
        </a>  
      </div>
      <div class="col-md-6 bn_block02">
        <a href="https://rabbitc.co.jp/product/saiyo/lp/" target="_blank">
          <div class="bn_box">
            <div class="name">
              <div id="marketing" class="mr-2"></div>
              <h4 class="fw_bold">採用動画マーケティング</h4>
            </div>                
            <p class="fs_bigger200">成功事例集<br>ダウンロード</p>
          </div>
        </a>
      </div>
    </div>
  </section> 

<?php get_footer(); ?>