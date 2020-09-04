<!DOCTYPE html>
<html lang="ja">
  <head>
 
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo;アーカイブ <?php } ?> <?php wp_title(); ?></title>
    <meta name="format-detection" content="telephone=no">
    
    <!-- template css -->
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-4.3.1.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- ADOBE fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/obj8uru.css">
    <!-- original -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">    

  <?php wp_head(); ?>
  </head>
  <body>

    
    <div class="ft_btn">
      <div class="ft_btn_wrap">
        <div class="icon01">
          <a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_ft_mail.png" alt="メール"></a>
        </div>
        <div class="icon02">
          <a href="tel:0661237650"><img src="<?php echo get_template_directory_uri(); ?>/images/common/btn_ft_tel.png" alt="電話"></a>
        </div>      
      </div>
    </div>    
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top header">
      
      <h1>
        <a class="navbar-brand" href="<?php echo home_url(); ?>/">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="RABBIT CREATIVE">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/common/logo_sp.svg" alt="RABBIT CREATIVE">
        </a>
      </h1>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                サービス
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="menu_img2">
                   <a class="dropdown-item" href="<?php echo home_url(); ?>/webpr/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_img01.png" alt="トータルWEBプロモーション事業"><br>トータルWEB<br class="sp">プロモーション事業</a>
                   <a class="dropdown-item" href="<?php echo home_url(); ?>/businessyt/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_img02.png" alt="ビジネスYOUTUBERプロデュース事業"><br>ビジネスYOUTUBERプロデュース事業</a>
                  </div>
                  <div class="menu_img3">
                   <a class="dropdown-item" href="<?php echo home_url(); ?>/saiyom/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_img03.png" alt="採用マーケティング事業"><br>採用マーケティング事業</a>
                   <a class="dropdown-item" href="<?php echo home_url(); ?>/movie/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_img04.png" alt="動画制作"><br>動画制作</a>
                   <a class="dropdown-item" href="<?php echo home_url(); ?>/website/"><img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_img05.png" alt="ウェブサイト制作"><br>ウェブサイト制作</a>
                  </div>            
                </div>
             </li>            
            
             <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/#top_case">導入事例</a>
             </li>
             <!--<li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/#top_seminer">セミナーイベント</a>
             </li>--> <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/library/">お役立ちコンテンツ</a>
             </li> 
             <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/category/news/">お知らせ</a>
             </li>             
             <li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/mission/">ミッション</a>
             </li>
	<li class="nav-item">
                <a class="nav-link" href="<?php echo home_url(); ?>/company/">会社情報</a>
             </li>              
            
            <!--
             <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
             </li>-->
          </ul>
         
         
         <div class="head_btn_block">
<div class="head_btn01"><a href="<?php echo home_url(); ?>/special/">採用情報</a></div>
           <!--<div class="head_btn01"><a href="https://rabbitc.co.jp/special/" target="_blank">採用情報</a></div>-->
           <div class="head_btn02"><a href="<?php echo home_url(); ?>/contact/">お問い合わせ</a></div>
         
         </div>
         
         <!--
          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>-->

       </div>
    </nav>