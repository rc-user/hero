<?php get_header(); ?>
  
<main class="top">
<article>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- インジケータの設定 -->
    <ol class="carousel-indicators">
      <li class="active car01" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
      <li class="car02" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li class="car03" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li class="car04" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <!-- スライドさせる画像の設定-->
    <div class="carousel-inner">
      <div class="carousel-item item01 active" data-interval="7000">
		   <div class="embed-responsive embed-responsive-16by9 pc">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/op.mp4" autoplay muted playsinline loop></video>
         </div> 
		   </div>
		   <div class="embed-responsive sp">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/sp_op.mp4" autoplay muted playsinline loop></video>
         </div> 
		   </div>      
      </div><!-- /.carousel-item -->
		
		
      <div class="carousel-item item02" data-interval="16000">
        <div class="embed-responsive embed-responsive-16by9 pc">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/business_yt.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>
        <div class="embed-responsive sp">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/sp_business_yt.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>         
      </div><!-- /.carousel-item -->
		
      <div class="carousel-item item03" data-interval="16000">
        <div class="embed-responsive embed-responsive-16by9 pc">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/webpr.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>
        <div class="embed-responsive sp">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/sp_webpr.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>         
      </div><!-- /.carousel-item -->
      
      <div class="carousel-item item04" data-interval="16000">
        <div class="embed-responsive embed-responsive-16by9 pc">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/saiyo.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>
        <div class="embed-responsive sp">
         <div class="main_movie">
          <video src="<?php echo get_template_directory_uri(); ?>/mv/sp_saiyo.mp4" autoplay muted playsinline loop></video>
         </div> 
        </div>         
      </div><!-- /.carousel-item -->
    </div><!-- /.carousel-inner -->
    
    <!-- スライドコントロールの設定 -->
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <i class="fas fa-chevron-right"></i>
    </a>
  </div><!-- /.carousel -->    
  
  
  <section class="service_area">
    <div class="container mb-5"> 
      <h2 class="ttl_type01 text-center ud_bar_gray">
        MEMBER<span class="sub_ttl fc_red">メンバー</span>
      </h2>
      
      <p class="text-center">インターネットやスマホの利用が当たり前となった今、これまでのような営業手法では効果が得ることができません。<br>ラビットクリエイティブでは、デジタルマーケティングで成果をあげるために必要なSEOコンテンツ、<br class="pc">ウェブサイト制作、動画制作などをトータルで提供しています。</p>
    </div>
    
    <div class="service_block_type01 mb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 case_box01">
            <div class="service_case_box">
              <a href="http://stretchpole.com/" target="_blank">
                <div class="tab_red">CASE</div>
                <div class="name fw_bold">株式会社LPN様</div>
                <p>製品ブランディングサイト「ストレッチポール」、WEBサイトから動画制作までをトータルにプロモーションいたします。</p>
              </a>
            </div>
          </div>
          <div class="col-md-6 case_box02">
            <div class="service_txt_box">
              <a href="<?php echo home_url(); ?>/webpr/">
                <div class="service_name">
                  <div id="totalweb"></div>
                  <h4 class="fc_red fw_bold">トータルWEBプロモーション事業</h4>         
                </div>
                <div class="sub_ttl fw_bold mb-3">TOTAL WEB PROMOTION</div>
                <p>ブランディングを含めたクリエイティブをはじめ、SEO,リスティング広告,アフィリエイトなど最新のテクノロジーを活用し総合的にクライアントの課題を解決いたします。</p>
              </a>  
            </div>
          </div>
        </div>
        <!--row-->
      </div>
    </div>
    <!--service_block-->
    
    <div class="service_block_type01 mb-6">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="service_txt_box">
              <a href="<?php echo home_url(); ?>/businessyt/">
                <div class="service_name">
                  <div id="business"></div>
                  <h4 class="fc_orange fw_bold">ビジネスYoutuberプロデュース</h4>              
                </div>
                <div class="sub_ttl fw_bold mb-3">BUSINESS YOUTUBER<br>PRODUCE</div>
                <p>マーケティングに基づいた戦略設計と高品質なクリエイティブをもとにYoutuberをプロデュースいたします。</p>
              </a>  
            </div>
          </div>          
          
          <div class="col-md-6">
            <div class="service_case_box">
              <a href="https://www.youtube.com/channel/UC7BUbg9Y2tXG6vfVFuaOORw" target="_blank">
                <div class="tab_orange">CASE</div>
                <div class="name fw_bold">THE HERO TRAINING</div>
                <p>「人をその気にさせる天才」財団法人日本コアコンディショニング協会名誉理事の吉武永賀がメンターとしてあなたの成長戦略を完全サポート。</p>
              </a>  
            </div>
          </div>

        </div>
        <!--row-->
      </div>
    </div>
    <!--service_block-->    
    
<!--
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service_3_block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/service_bg03.png);">
            <div class="service_case_box">
              <div class="tab_blue">CASE</div>
              <p>株式会社 買取王国</p>
            </div>

            <div class="service_txt_box service_txt_box01">
              <a href="<?php echo home_url(); ?>/saiyom/">
                <div class="service_name">
                  <div id="marketing_s"></div>
                  <h4 class="fc_blue">採用マーケティング</h4>              
                </div>
                <div class="sub_ttl fw_bold">RECRUITING<br>MARKETING</div>
              </a>  
            </div>
          </div>  
        </div>
        
        <div class="col-md-4">
          <div class="service_3_block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/service_bg04.png);">
            <div class="service_case_box">
              <div class="tab_green">CASE</div>
              <p>株式会社 フェリシモ</p>
            </div>

            <div class="service_txt_box service_txt_box02">
              <a href="<?php echo home_url(); ?>/movie/">
                <div class="service_name">
                  <div id="movie"></div>
                  <h4 class="fc_green">動画制作</h4>              
                </div>
                <div class="sub_ttl fw_bold">MOVIE<br>PRODUCT</div>
              </a>  
            </div>
          </div>  
        </div>
        
        <div class="col-md-4">
          <div class="service_3_block" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/common/service_bg05.png);">
            <div class="service_case_box">
              <div class="tab_purple">CASE</div>
              <p>医療法人れんげ会</p>
            </div>

            <div class="service_txt_box service_txt_box03">
              <a href="<?php echo home_url(); ?>/website/">
                <div class="service_name">
                  <div id="web"></div>
                  <h4 class="fc_purple">Webサイト制作</h4>              
                </div>
                <div class="sub_ttl fw_bold">WEBSITE<br>CREATION</div>
              </a>  
            </div>
          </div>  
        </div>


      </div>
    </div>
--->
  </section>	
	
  <section class="case_area" id="top_case">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-4 col-12 bar_r_gray">
          <h2 class="ttl_type02">CASE &amp; STUDY<span class="sub_ttl fc_red">導入事例</span></h2>
        </div>
        <div class="col-md-8 col-12 ttl02_txt">
          <p>オウンドメディアの導入や、Webサイトの新規構築／リニューアルなど<br>BtoBやBtoC、業種業態問わず多くの企業様に導入いただいております。</p>
        </div>
      </div>
      
      <div class="row mb-4">
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="<?php echo home_url(); ?>/case/case02/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case01.png" alt="採用に動画を使う理由"></a></div>
          <h4 class="fw_bold mb-1">採用に動画を使おうと思った理由</h4>
          <p class="mb-3">なぜ映像制作会社ではなく動画マーケティングの会社に依頼したのか、その理由は採用プロモーションで効果を出すためにはマーケティングの力が必要だったから。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="<?php echo home_url(); ?>/case/case03/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case02.png" alt="アルバイト採用における動画活用成功事例"></a></div>
          <h4 class="fw_bold mb-1">【採用担当必見】動画を活用した効果について</h4>
          <p class="mb-3">最初は不安でした。しかし、SNSが当たり前のミレニアル世代に対しては動画で見せることが効果的なんだと確信できました。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="<?php echo home_url(); ?>/case/case04/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case03.png" alt="インターンシップ動画活用成功事例"></a></div>
          <h4 class="fw_bold mb-1">【実例インタビュー】採用のミスマッチの解決には動画がマスト</h4>
          <p class="mb-3">採用のミスマッチをなくす、その実現の為のツールとして動画はなくてはならないと感じました。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="<?php echo home_url(); ?>/case/case05/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case05.png" alt="【対談】採用に動画を活用する理由"></a></div>
<h4 class="fw_bold mb-1">【実例】動画で課題を解決する方法 名鉄レストラン</h4>
<p class="mb-3">現在働いている大学生の方たちにも当社の魅力を知ってもらいたいという思いから動画を活用しようと思いました。</p>
          <div class="name">株式会社名鉄レストラン様</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="<?php echo home_url(); ?>/case/case06/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case05.png" alt="新卒採用における動画活用"></a></div>
<h4 class="fw_bold mb-1">新卒採用における動画活用と裏の目的</h4>
<p class="mb-3">新卒採用時に事業をきちんと理解してもらう為に使用した動画、しかし効果はそれだではありませんでした。</p>
          <div class="name">株式会社名鉄レストラン様</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://rabbitc.co.jp/case/case01/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case06.png" alt=""></a></div>
          <h4 class="fw_bold mb-1">フェリシモ様のサービスの価値を伝える方法とは</h4>
          <p class="mb-3">伝わらなければないのと同じ。サービスの価値が伝えるにはどうしたらいいのか、ずっと課題だった部分を動画とマーケティングによって解決しようと思いました。</p>
          <div class="name">株式会社フェリシモ様</div>
        </div>

      </div>
      <!--row-->
      
      <div class="btn_type01">
        <a href="<?php echo home_url(); ?>/contact/">事例をもっと見る</a>
      </div>    
      
    </div>
  </section>  
  
  

  
	
<!--
  <section class="seminer_area" id="top_seminer">
    <div class="container">
      <h2 class="ttl_type01 text-center ud_bar_gray">
        SEMINER<span class="sub_ttl fc_red">セミナー・イベント情報</span>
      </h2>
      
      <p class="text-center mb-6">毎月ミートアップイベントを開催しています。<br>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      
      <div class="row mb-7">
        <div class="col-md-4">
          <div class="seminer_block">
            <a href="#">
              <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case01.png" alt=""></div>
              <p class="mb-4">【毎月開催】採用動画セミナーを大阪本社で開催いたします。次回開催日は〇月〇日、ご予約はフォームからおねがいいた…</p>
              <div class="name fw_bold">採用動画セミナー開催のお知らせ</div>
            </a>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="seminer_block">
            <a href="#">
              <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case01.png" alt=""></div>
              <p class="mb-4">【毎月開催】採用動画セミナーを大阪本社で開催いたします。次回開催日は〇月〇日、ご予約はフォームからおねがいいた…</p>
              <div class="name fw_bold">採用動画セミナー開催のお知らせ</div>
            </a>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="seminer_block">
            <a href="#">
              <div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case01.png" alt=""></div>
              <p class="mb-4">【毎月開催】採用動画セミナーを大阪本社で開催いたします。次回開催日は〇月〇日、ご予約はフォームからおねがいいた…</p>
              <div class="name fw_bold">採用動画セミナー開催のお知らせ</div>
            </a>
          </div>
        </div>
      </div>
      
      <div class="btn_type01 mb-8">
        <a href="#form_area">もっと見る</a>
      </div>         
      
    </div>
  </section>
-->  


  <section class="library_area" id="top_library">
    <div class="container">
      <div class="row align-items-center mb-5">
        <div class="col-md-4 col-12 bar_r_gray">
          <h2 class="ttl_type02">CONTENTS<span class="sub_ttl fc_red">お役立ちコンテンツ</span></h2>
        </div>
        <div class="col-md-8 col-12 ttl02_txt">
          <p>Webマーケティングで成果を出すための事例、具体的な実践法、動画マーケティングの<br class="pc">活用法など、ラビットクリエイティブのノウハウが詰まったコンテンツを公開しています。貴社のビジネスにぜひご活用ください。</p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-7">
          <div class="main_post">
            <a href="<?php echo home_url(); ?>/library/marketing11/">
            <div class="photo">
              <img src="https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/marketing-team-analyzing-statistics-at-meeting-SBKC3Z8.jpg" alt="" class="wp-image-248" srcset="https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/marketing-team-analyzing-statistics-at-meeting-SBKC3Z8.jpg 1000w, https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/marketing-team-analyzing-statistics-at-meeting-SBKC3Z8-300x200.jpg 300w, https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/marketing-team-analyzing-statistics-at-meeting-SBKC3Z8-768x512.jpg 768w, https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/marketing-team-analyzing-statistics-at-meeting-SBKC3Z8-120x80.jpg 120w" sizes="(max-width: 1000px) 100vw, 1000px" />
            </div>
            <h5 class="name">まだ誰も知らない動画マーケティングのいま</h5>
            <p>「動画マーケティングって、つまり動画プラットフォームや動画広告のこと？」そんなふうに思っていませんか？実は動画プラットフォームや動画広告は、動画マーケティングのほんの一部でしかありません。動画マーケティングの本質的や効果的な実践方法を網羅的にわかりやすく解説いたします。</p>
            </a>  
          </div>  
        </div>
        <div class="col-md-5">
          <div class="row sub_post">
            <div class="col-md-4">
              <a href="<?php echo home_url(); ?>/library/marketing08/"><img src="https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/measure-success-concept-PLZUEUG.jpg" alt="動画マーケティング"></a>
            </div>
            <div class="col-md-8 sub_post_txt">
              <h5 class="fs_bigger130 fw_bold mb-3"><a href="<?php echo home_url(); ?>/library/marketing08/">2019年トレンド動画マーケティングの成功事例7個</a></h5>
              <p><a href="<?php echo home_url(); ?>/library/marketing08/">動画は本当に効果があるのでしょうか？今回は事例紹介と成功するためのコツをお教えします。</a></p>
            </div>
          </div>
          <div class="row sub_post">
            <div class="col-md-4">
              <a href="<?php echo home_url(); ?>/library/marketing15/"><img src="https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/24-2.png" alt="リードナーチャリング"></a>
            </div>
            <div class="col-md-8 sub_post_txt">
              <h5 class="fs_bigger130 fw_bold mb-3"><a href="<?php echo home_url(); ?>/library/marketing15/">リードナーチャリングの事例5つ手法と数値をあわせて紹介します</a></h5>
              <p><a href="<?php echo home_url(); ?>/library/marketing15/">リードナーチャリングは購入ではなく、育成が目的。しかし、やはり最終目的は購入が目的なので忘れずに。</a></p>
            </div>
          </div>
          <div class="row sub_post">
            <div class="col-md-4">
              <a href="<?php echo home_url(); ?>/library/marketing07/"><img src="https://rabbitc.co.jp/wp/wp-content/uploads/2019/09/team-business-using-pen-laptop-are-planning-a-6YF5TC7.jpg" alt="マーケティングの基礎知識"></a>
            </div>
            <div class="col-md-8 sub_post_txt">
              <h5 class="fs_bigger130 fw_bold mb-3"><a href="<?php echo home_url(); ?>/library/marketing07/">マーケティングの基礎知識 4P・4C・SWOT分析・3C分析って何？</a></h5>
              <p><a href="<?php echo home_url(); ?>/library/marketing07/">「マーケティング」を説明するのは難しいですよね。マーケティングを考える上で基礎となる考え方を説明いたします。</a></p>
            </div>
          </div>
        </div>
      </div>
      <!--row-->
      
      <div class="btn_type01">
        <a href="<?php echo home_url(); ?>/library/">もっと見る</a>
      </div>       
      
    </div>
  </section>




  <section class="news_area" id="top_news">
    <div class="container">
      <h2 class="ttl_type01 text-center mb-5">
        NEWS<span class="sub_ttl fc_red">お知らせ</span>
      </h2>      
      
      <div class="mb-6">
        <!--▼ループ開始-->
        <?php
          $args = array(
            'post_type' => 'post', // 投稿タイプのスラッグを指定
            'post_status' => 'publish', // 公開済の投稿を指定
            'posts_per_page' => 2 // 投稿件数の指定
          );
          $the_query = new WP_Query($args); if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        
          <div class="row news_box">
              <div class="col-md-2 text-center day bar_r_gray"><p><?php the_time( 'Y.m.d' ); ?></p></div>
              <div class="col-md-10 news_txt"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p></div>
          </div>        

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <div class="row news_box">
            <div class="col-md-2 text-center day bar_r_gray"></div>
            <div class="col-md-10 news_txt"><p>投稿はまだありません。</p></div>
          </div>
        <?php endif; ?>        	  
		  

      </div>
		
      <div class="btn_type01">
        <a href="<?php echo home_url(); ?>/category/news/">もっと見る</a>
      </div>   
    </div>
  </section>
  
<!--
  <section class="sns_area">
    <div class="container">
      <h2 class="ttl_type01 text-center mb-5">
        SNS
      </h2>         
      
      <div class="row justify-content-center sns_block">
        <div><a href="https://www.facebook.com/rabbitc.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_fb.png" alt="facebook"></a></div>
        <div><a href="https://twitter.com/rabbit_creative" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_tw.png" alt="twitter"></a></div>
        <div><a href="https://www.instagram.com/rabbitcreative/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_insta.png" alt="Instagram"></a></div>
        <div><a href="https://www.youtube.com/channel/UCsDnvAvDZ5HA9p2RFu_Echw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_yt.png" alt="youtube"></a></div>
        <div><a href="http://rabbitc.co.jp/blog/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_blog.png" alt="blog"></a></div>
      </div>

    </div>
  </section>
-->
</article>
    
   
  
  <?php get_footer(); ?>
  
