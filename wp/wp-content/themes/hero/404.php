<?php get_header(); ?>

<main class="pages">
<article class="mb-5">
  <div class="jumbotron jumbotron-fluid text-center page_header">
     <p class="sub_ttl">404 Not Found.</p>    
     <div class="ttl">ページがありません</div>
  </div>

  <div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="wrap">
      <?php if(function_exists('bcn_display')){bcn_display();} ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12 main_col">
        
		<section>
          <h1>ページがありません<span class="small">Page Not Found.</span></h1>
          
          <p>申し訳ありませんが、お探しのページが見つかりません。<br /><a href="<?php echo home_url(); ?>/">こちら</a>からTOPページへお戻りください。</p>
        
        </section>		  
		
        
      </div>
      <!--main_col-->
      
      <?php get_sidebar(); ?>
    
    </div>
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
  
</main>

<?php get_footer(); ?>