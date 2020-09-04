      <div class="col-md-4 col-12 sub_col">

        
        <div class="mb-5">
          <h3 class="search_ttl fw_bold">サイト内検索</h3>
<style>
  .sub_col input[type="submit"]{
    font-size: 13px;
    padding: 10px 5px;
    border-radius: 5px;
    width: 180px;
    background: #c2002e;
    color: #fff;
    margin: 15px auto 0;
  }
  
  .pages .youtube a{
    display: inline-block;
    padding: 7px 5px;
    color: #fff;
    background: #c2002e;
    font-size: 10px;
    margin-bottom: 5px}
  
  .pages .marketing a{
    display: inline-block;
    padding: 7px 5px;
    color: #fff;
    background: #e2865b;
    font-size: 10px; 
    margin-bottom: 5px}

          
</style>            
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>"><label class="screen-reader-text" for="s"></label><input type="text" value="" name="s" id="s" />
  <div align="center">
		<input type="submit" id="searchsubmit" value="検索する" />
  </div>  
</form>          
          
          
        </div>
        
        <h2 class="side_ttl_type01 fw_bold mb-3">最新お役立ちコンテンツ</h2>
        <div class="side_case_list mb-5">
        <!--▼ループ開始-->
        <?php
          $args = array(
            'post_type' => 'library', // 投稿タイプのスラッグを指定
            'post_status' => 'publish', // 公開済の投稿を指定
            'posts_per_page' => 5 // 投稿件数の指定
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        
          <div class="row mb-3">
            <div class="col-md-5 side_case_thumb">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class="col-md-7">
              
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
              
              <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
          </div>       

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <div class="row mb-3">
            <div class="col-md-12">
              <p>投稿はまだありません。</p>
            </div>
          </div>  
        <?php endif; ?>             
          
          
          <div class="btn_type01 mt-4"><a href="<?php echo home_url(); ?>/library/">もっと見る</a></div>
          
        </div>
        <!--.side_case_list-->          
        

      </div>
      <!--sub_col-->      


