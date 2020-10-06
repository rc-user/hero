  
</main>
  
  <footer class="footer">
    <div class="container">
      <div class="row foot_nav">      
        <div class="col-md-3">
          <div class="logo mb-4"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="RABBIT CREATIVE"></a></div>
          <h5 class="fw_bold mb-3">株式会社RABBIT CREATIVE</h5>
          <p class="fc_gray">〒550-00111<br>
            大阪府大阪市西区阿波座1-7-12<br>
            東新ビル5F<br>
          tel：06-6123-7650</p>
        </div>
        <div class="col-md-3">
          <h5 class="fw_bold mb-3">サービス一覧</h5>
          <ul>
            <li><a href="<?php echo home_url(); ?>/webpr/">トータルWEBプロモーション事業</a></li>
            <li><a href="<?php echo home_url(); ?>/businessyt/">ビジネスYOUTUBERプロデュース事業</a></li>
            <li><a href="<?php echo home_url(); ?>/saiyom/">採用マーケティング事業</a></li>
            <li><a href="<?php echo home_url(); ?>/movie/">動画制作</a></li>
            <li><a href="<?php echo home_url(); ?>/website/">ウェブサイト制作</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="fw_bold mb-3">ラビットクリエイティブの強み</h5>
          <ul>
            <!--<li><a href="index/#top_seminer">セミナー/イベント</a></li>-->
            <li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
            <li><a href="<?php echo home_url(); ?>/mission/">ミッション・ビジョン</a></li>
            <li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5 class="fw_bold mb-3">お役立ちコンテンツ</h5>
          <ul>
            <li><a href="<?php echo home_url(); ?>/library/marketing11/">まだ誰も知らない動画マーケティングのいま</a></li>
            <li><a href="<?php echo home_url(); ?>/library/marketing08/">2019年トレンド動画マーケティングの成功事例7個</a></li>
            <li><a href="<?php echo home_url(); ?>/library/marketing15/">リードナーチャリングの事例5つ手法と数値をあわせて紹介します</a></li>
            <li><a href="<?php echo home_url(); ?>/library/marketing07/">マーケティングの基礎知識 4P・4C・SWOT分析・3C分析って何？</a></li>
          </ul>
        </div>              
      </div>
    </div>

  </footer>
  

    
  <div class="copy">
    <p>&copy;2019 RABBIT CREATIVE Inc. All Rights Reserved.
    
    </p>
  </div>
  
  <!--  
  <div class="pagetop"><a href="#"><i class="fas fa-chevron-circle-up"></i></a></div>    
  -->  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-4.3.1.js"></script>
    
<script src="<?php echo get_template_directory_uri(); ?>/js/lottie.min.js" type="text/javascript" charset="utf-8"></script>  
  
  <script type="text/javascript">
    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('bell'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_bell.json'
      });      
    });      
    
    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('business'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_business.json'
      });      
    });    
    
    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('collect'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_collect.json'
      });      
    });    
    
    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('heart'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_heart.json'
      });      
    });
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('marketing'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_marketing.json',
      });
    }); 
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('marketing_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_marketing.json',
      });
    });    

    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('mobile'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_mobile.json',
      });
    });
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('move'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_move.json',
      });
    });     
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('movie'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_movie.json',
      });
    }); 
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('share'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_share.json',
      });
    }); 
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('totalweb'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_totalweb.json',
      });
    }); 
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('web'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_web.json',
      });
    }); 

    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('heart_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_heart.json'
      });      
    });    
    
    $(function(){  
      const anim = lottie.loadAnimation({
        container: document.getElementById('collect_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_collect.json'
      });      
    });    

    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('mobile_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_mobile.json',
      });
    });    
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('move_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_move.json',
      });
    });     
    
    $(function(){ 
      const anim = lottie.loadAnimation({
        container: document.getElementById('share_s'),
        renderer: 'svg',
        loop: true,
        path: '<?php echo get_template_directory_uri(); ?>/js/json/icon_share.json',
      });
    });     
    
  </script>       

<?php if(is_page( '2' )): ?>
<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4347086.js"></script>
<!-- End of HubSpot Embed Code -->  
<?php else: ?>
<?php endif; ?>

  <?php wp_footer(); ?>  
  </body>
</html>
