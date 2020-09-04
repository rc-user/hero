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
   
    

  <section class="strength_area">
    <div class="container">
  
      <h2 class="fs_bigger270 text-center fw_bold">
        最適な戦略をフェーズに<br class="sp">細分化して構築。
      </h2>
      <p class="fs_bigger130 fw_bold text-center ud_bar_gray mb-7">お客様の課題に対して的確な<br class="sp">プランをご提案し、<br class="sp">成果につなげます。</p>
      
      <p class="text-center fc_gray">ラビットクリエイティブの最大の強みは「お客様の真のニーズを掴み、それをクリエイティブに反映出来ること」です。<br>
        私たちラビットクリエイティブが<br class="sp">いただくご要望は、<br>「商品を売りたい」、「認知度をもっと高めたい」、「ブランディングを確立したい」、<br class="pc">「優秀な人材を採用したい」など多岐に渡ります。</p>
      
      <p class="text-center fc_gray"><br class="sp">動画ありきではなく、お客様の本当の課題は何であり、それはどのような手法で解決するのが<br class="pc">ベストなのかということをゼロベースで考えるため、最終的には動画が解決策の主にならないケースもあります。<br><br class="sp">大切なのは「お客様が持つ価値を形にし、届けたい人へ届ける」ことであり、<br>「企業と人のミスマッチを解消する」<br class="sp">ことです。</p>
      
      <p class="text-center fc_gray mb-6"><br class="sp">そのためにもラビットクリエイティブは、お客様が「伝える」における最高のパートナーとして、お力になります。</p>
      
      <div class="phase_area">
        <ul id="myTab" class="phase_tab_area nav nav-tabs">
          <li class="tab_box phase01 nav-item">
            <a href="#tab1" class="nav-link active" data-toggle="tab">
              <div class="num">phase1</div>
              <div class="ttl">
                <div id="heart_s"></div>
                <h3 class="txt">認知・<br>興味関心</h3>
              </div>
            </a>  
          </li>
          <li class="tab_box phase02 nav-item">
            <a href="#tab2" class="nav-link" data-toggle="tab">
              <div class="num">phase2</div>
              <div class="ttl">
                <div id="collect_s"></div>
                <h3 class="txt">情報収集</h3>
              </div>
            </a>
          </li>
          <li class="tab_box phase03 nav-item">
            <a href="#tab3" class="nav-link" data-toggle="tab">
              <div class="num">phase3</div>
              <div class="ttl">
                <div id="mobile_s"></div>
                <h3 class="txt">比較検討</h3>
              </div>
            </a>
          </li>
          <li class="tab_box phase04 nav-item">
            <a href="#tab4" class="nav-link" data-toggle="tab">
              <div class="num">phase4</div>
              <div class="ttl">
                <div id="move_s"></div>
                <h3 class="txt">行動（購買）</h3>
              </div>
            </a>  
          </li>
          <li class="tab_box phase05 nav-item">
            <a href="#tab5" class="nav-link" data-toggle="tab">
              <div class="num">phase5</div>
              <div class="ttl">
                <div id="share_s"></div>
                <h3 class="txt">継続利用・<br>シェア</h3>
              </div>
            </a>  
          </li>
        </ul>
        <!--.phase_tab_area-->
        
        <div class="tab-content">      
          <div id="tab1" class="phase_detail_area tab-pane active fade show">
            <h3 class="ttl"><div id="heart"></div>認知・興味関心<span>注目を集める、関心を持たせる</span></h3>

            <div class="row ">
              <div class="col-md-4">
                <h3 class="detail_ttl">できること：戦術と運用</h3>
                <ul class="phase_list mb-4">
                  <li>PPC広告プロモーション運用</li>
                  <li>PPC動画広告プロモーション運用</li>
                  <li>SNS広告プロモーション運用</li>
                  <li>SNS動画広告プロモーション運用</li>
                  <li>Youtube動画広告プロモーション運用</li>
                  <li>TVCMプロモーション運用</li>
                  <li>Web媒体CMプロモーション運用</li>
                  <li>デジタルサイネージ・プロモーション運用</li>
                  <li>リターゲティング広告運用</li>
                </ul>
              </div>
              
              <div class="col-md-3">
                <h3 class="detail_ttl">できること：制作と運用</h3>
                <ul class="phase_list">
                  <li>広告撮影（写真・動画）</li>
                  <li>各種デザイン制作</li>
                  <li>WebCM制作</li>
                  <li>TVCM制作</li>
                  <li>SNS動画広告制作</li>
                  <li>ランディングページ制作</li>
                </ul>
              </div>
              <div class="col-md-5 phase_case">
                <a href="https://www.youtube.com/watch?v=1dSDQBdzW94&feature=youtu.be" target="_blank">
                  <h3 class="detail_ttl">弊社ピックアップ実績</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/phase_img_case01.png" alt="株式会社リクルート">
                  <!--<h4 class="phase_case_ttl">ゼクシー 2019/6/24 発売本誌掲載</h4>-->
                  <p class="phase_case_txt">ゼクシー 2019/6/24 発売本誌掲載</p>
                  <div class="phase_case_name">株式会社リクルート</div>
                  <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow01.svg" alt="#"></div>

                </a>
              </div>

            </div>
          </div>

          <div id="tab2" class="phase_detail_area area02 tab-pane fade">
            <h3 class="ttl"><div id="collect"></div>情報収集<span>WEB・SNSを検索する</span></h3>

            <div class="row ">
              <div class="col-md-3">
                <h3 class="detail_ttl">できること：戦術と運用</h3>
                <ul class="phase_list">
                  <li>マーケティングオートメーション設計</li>
                  <li>リードナーチャリング戦略設計</li>
                  <li>オウンドメディア戦略設計</li>
                  <li>Youtubeチャンネル構築</li>
                  <li>SEO対策（キーワード対策）</li>
                  <li>リターゲティング広告運用 </li>
                </ul>
              </div>
              <div class="col-md-4">
                <h3 class="detail_ttl">できること：制作と運用</h3>
                <ul class="phase_list">
                  <li>コンテンツ撮影（写真・動画）</li>
                  <li>動画コンテンツ企画・編集</li>
                  <li>各種デザイン制作</li>
                  <li>オウンドメディアサイト制作</li>
                  <li>オウンドメディアサイト制作</li>
                  <li>オウンドメディア記事コンテンツ制作</li>
                  <li>オウンドメディア動画コンテンツ制作</li>
                  <li>Youtube動画コンテンツ制作</li>
                  <li>Instagramストーリーコンテンツ制作</li>
                </ul>
              </div>
              <div class="col-md-5 phase_case">
                <a href="https://www.youtube.com/watch?v=oHPbi7CohVo&feature=youtu.be" target="_blank">
                  <h3 class="detail_ttl">弊社ピックアップ実績</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/phase_img_case02.png" alt="株式会社フェリシモ">
                  <h4 class="phase_case_ttl">フェリシモ インポートスイーツの会</h4>
                  <p class="phase_case_txt">Instagram ストーリー広告</p>
                  <div class="phase_case_name">株式会社フェリシモ</div>
                  <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow01.svg" alt=""></div>

                </a>
              </div>

            </div>
          </div>

          <div id="tab3" class="phase_detail_area area03 tab-pane fade">
            <h3 class="ttl"><div id="mobile"></div>比較検討<span>優位性をアピール</span></h3>

            <div class="row ">
              <div class="col-md-4">
                <h3 class="detail_ttl">できること：戦術と運用</h3>
                <ul class="phase_list">
                  <li>マーケティングオートメーション設計</li>
                  <li>SEO対策（キーワード対策）運用</li>
                  <li>リターゲティング広告運用</li>
                  <li>SNS運用（LINE、Instagram、TickTockなど）</li>
                  <li>モール口コミ対策（Amazon、楽天）</li>
                  <li>口コミサイト対策（Lips,@コスメ）</li>
                  <li>Youtuberアフィリエイト活用 </li>
                </ul>
              </div>
              <div class="col-md-3">
                <h3 class="detail_ttl">できること：制作と運用</h3>
                <ul class="phase_list">
                  <li>コンテンツ撮影（写真・動画）</li>
                  <li>各種デザイン制作</li>
                  <li>動画コンテンツ企画・編集</li>
                  <li>ブランドサイト制作</li>
                  <li>ランディングページ制作</li>
                  <li>HTMLメールデザイン</li>
                  <li>メルマガコンテンツ制作</li>
                  <li>SNSコンテンツ制作</li>
                  <li>お客様インタビュー動画コンテンツ制作</li>
                  <li>ナーチャリング動画コンテンツ制作</li>
                </ul>
              </div>
              <div class="col-md-5 phase_case">
                <a href="http://stretchpole.com/" target="_blank">
                  <h3 class="detail_ttl">弊社ピックアップ実績</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/phase_img_case03.png" alt="株式会社LPN">
                  <!--<h4 class="phase_case_ttl">ストレッチポール® 公式ブランドサイト構築＋トップムービー</h4>-->
                  <p class="phase_case_txt">ストレッチポール® 公式ブランドサイト構築＋トップムービー</p>
                  <div class="phase_case_name">株式会社LPN</div>
                  <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow01.svg" alt=""></div>

                </a>
              </div>

            </div>
          </div>

          <div id="tab4" class="phase_detail_area area04 tab-pane fade">
            <h3 class="ttl"><div id="move"></div>行動（購買）<span>意思決定を促進</span></h3>

            <div class="row ">
              <div class="col-md-4">
                <h3 class="detail_ttl">できること：戦術と運用</h3>
                <ul class="phase_list">
                  <li>マーケティングオートメーション設計</li>
                  <li>リターゲティング広告運用</li>
                  <li>アップセル・クロスセル戦略設計</li>
                  <li>カスタマーサクセスコミュニティ誘導</li>
                  <li>モールから自社サイトへの誘導</li>
                  <li>口コミ促進</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h3 class="detail_ttl">できること：制作と運用</h3>
                <ul class="phase_list">
                  <li>販売用ランディングページ制作</li>
                  <li>ナーチャリング動画コンテンツ制作</li>
                </ul>
              </div>
              <div class="col-md-5 phase_case">
                <a href="https://heros.support/reception_c.html" target="_blank">
                  <h3 class="detail_ttl">弊社ピックアップ実績</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/phase_img_case04.png" alt="株式会社アネイジ">
                  <!--<h4 class="phase_case_ttl">MATSUSHIMA-HOLDINGS WEB-CM</h4>-->
                  <p class="phase_case_txt">THE HERO TRAINING webサイト</p>
                  <div class="phase_case_name">株式会社アネイジ</div>
                  <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow01.svg" alt=""></div>

                </a>
              </div>

            </div>
          </div> 

          <div id="tab5" class="phase_detail_area area05 tab-pane fade">
            <h3 class="ttl"><div id="share"></div>継続利用・シェア<span>ファンにさせる</span></h3>

            <div class="row ">
              <div class="col-md-4">
                <h3 class="detail_ttl">できること：戦術と運用</h3>
                <ul class="phase_list">
                  <li>マーケティングオートメーション設計</li>
                  <li>アップセル・クロスセル戦略設計</li>
                  <li>カスタマーサクセスコミュニティ誘導</li>
                  <li>モールから自社サイトへの誘導Youtubeチャンネル運用</li>
                  <li>口コミ促進</li>
                  <li>ファンのオフ会誘導</li>
                </ul>
              </div>
              <div class="col-md-3">
                <h3 class="detail_ttl">できること：制作と運用</h3>
                <ul class="phase_list">
                  <li>会員向けアプリ開発</li>
                  <li>販売用ランディングページ制作</li>
                  <li>ナーチャリング動画コンテンツ制作</li>
                </ul>
              </div>
              <div class="col-md-5 phase_case">
                <a href="https://www.youtube.com/channel/UC7BUbg9Y2tXG6vfVFuaOORw" target="_blank">
                  <h3 class="detail_ttl">弊社ピックアップ実績</h3>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/phase_img_case05.png" alt="株式会社アネイジ">
                  <!--<h4 class="phase_case_ttl">MATSUSHIMA-HOLDINGS WEB-CM</h4>-->
                  <p class="phase_case_txt">THE HERO TRAINING Youtubeチャンネル運用</p>
                  <div class="phase_case_name">株式会社 アネイジ</div>
                  <div class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow01.svg" alt=""></div>

                </a>
              </div>

            </div>
          </div> 
        </div>
        <!--.tab-content-->
        
      </div>
      <!--.phase_area-->
      

    </div>
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
          <div class="mb-2"><a href="https://youtu.be/LIgepggQseQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case01.png" alt="採用に動画を使う理由"></a></div>
          <h4 class="fw_bold mb-1">【対談】採用に動画を使う理由</h4>
          <p class="mb-3">長期的なお付き合いをしていくにはどれだけ当事者意識をもってもらえるかどうか大切でした。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://youtu.be/wuy1t5ZdA4g" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case02.png" alt="アルバイト採用における動画活用成功事例"></a></div>
          <h4 class="fw_bold mb-1">アルバイト採用での動画活用事例</h4>
          <p class="mb-3">採用単価の低下を実感。SNSが当たり前の世代に対して動画で見せることが効果的だと確信しました。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://youtu.be/CA5ANoIOEbQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case03.png" alt="インターンシップ動画活用成功事例"></a></div>
          <h4 class="fw_bold mb-1">インターンシップ動画活用成功事例</h4>
          <p class="mb-3">当社が求める学生とのミスマッチをなくす、そのために動画は有効だと感じました。</p>
          <div class="name">株式会社 買取王国</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://youtu.be/T4BViBzCQzQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case05.png" alt="【対談】採用に動画を活用する理由"></a></div>
          <h4 class="fw_bold mb-1">【対談】採用に動画を活用する理由</h4>
          <p class="mb-3">現在働いている大学生の方たちに、当社の魅力を知ってもらいたいという思いから動画を活用しようと思いました。</p>
          <div class="name">株式会社名鉄レストラン様</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://youtu.be/rT5GWJ1v_V8" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case05.png" alt="新卒採用における動画活用"></a></div>
          <h4 class="fw_bold mb-1">新卒採用における動画活用</h4>
          <p class="mb-3">事業をきちんと理解してもらわないと、当社が求めている学生さんに来ていただくのが難しいと感じていました。</p>
          <div class="name">株式会社名鉄レストラン様</div>
        </div>
        
        <div class="col-md-4 mb-5 cs_box">
          <div class="mb-2"><a href="https://youtu.be/-1JaN4eJ0kQ" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/img_case06.png" alt=""></a></div>
          <h4 class="fw_bold mb-1">本当に伝えたいことを伝えるために</h4>
          <p class="mb-3">課題解決のため、戦略に基づいたクリエイティブとマーケティング、両方を運用できる企業を探していました。</p>
          <div class="name">株式会社フェリシモ様</div>
        </div>

      </div>
      <!--row-->
      
      <!--<div class="btn_type01">
        <a href="<?php echo home_url(); ?>/contact/">事例をもっと見る</a>
      </div> -->      
      
    </div>
  </section>  
  
  
  <section class="service_area">
    <div class="container mb-5"> 
      <h2 class="ttl_type01 text-center ud_bar_gray">
        SERVICE<span class="sub_ttl fc_red">提供サービス</span>
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
  
