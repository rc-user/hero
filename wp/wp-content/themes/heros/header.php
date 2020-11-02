<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#fff">
  <title>
    <?php if( is_page('front')): ?>
      <?php bloginfo( 'description' ); ?> | <?php blogInfo('name'); ?>
    <?php elseif( is_archive() ):?>
      <?php echo esc_html(get_post_type_object(get_post_type())->label); ?> | <?php bloginfo( 'description' ); ?> | <?php blogInfo('name'); ?>
    <?php else: ?>
      <?php the_title(); ?> | <?php bloginfo( 'description' ); ?> | <?php blogInfo('name'); ?>
    <?php endif; ?>
  </title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <?php wp_head(); ?>

  <link rel="icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/apple-touch-icon-180x180.png">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/lib/drawer.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/common.css" />

  <?php if( is_page('front')): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/lib/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/lib/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/front.css" />
  <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/second.css" />
  <?php endif; ?>
</head>

<body id="body" <?php body_class('drawer drawer--right'); ?>>
  <?php wp_body_open(); ?>

  <header id="header">
    <?php if( is_front_page() && is_home() ): ?>
    <h1 class="header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo.png" alt="ザ・ヒーロートレーニング"></a></h1>
    <?php else: ?>
    <div class="header__logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo.png" alt="ザ・ヒーロートレーニング"></a></div>
    <?php endif; ?>

    <nav id="global-nav">
      <ul class="global-nav__list">
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>"><span>SEMINAR</span></a>
        </li>
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"><span>NEWS</span></a>
        </li>
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/concept/' ) ); ?>"><span>CONCEPT</span></a>
        </li>
        <li class="global-nav__list__item mega-trigger">
          <a href="#"><span>TRAINER</span></a>
          <div class="mega-menu">
            <h3 class="mega-menu__ttl">TRAINER</h3>
            <ul class="mega-menu__list">
              <li><a href="<?php echo esc_url( home_url( '/trainer/hisayoshi-yoshitake/' ) ); ?>">吉武 永賀</a></li>
              <li><a href="<?php echo esc_url( home_url( '/trainer/yoshizumi-iwasaki/' ) ); ?>">岩﨑 由純</a></li>
            </ul>
          </div>
          <!-- /.mega-menu -->
        </li>
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/school/' ) ); ?>"><span>SCHOOL</span></a>
        </li>
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/books/' ) ); ?>"><span>BOOKS</span></a>
        </li>
        <li class="global-nav__list__item">
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><span>CONTACT</span></a>
        </li>
      </ul>
    </nav>

    <div class="drawer-toggle drawer-hamburger">
      <span class="drawer-hamburger-icon"></span>
    </div>

    <nav class="drawer-nav">
      <div class="drawer-nav__logo"></div>
      <ul class="drawer-menu">
        <li><a href="<?php echo esc_url( home_url( '/seminar/' ) ); ?>">SEMINAR</a></li>
        <li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">NEWS</a></li>
        <li><a href="<?php echo esc_url( home_url( '/concept/' ) ); ?>">CONCEPT</a></li>
        <li>
          <dl>
            <dt>TRAINER</dt>
            <dd><a href="<?php echo esc_url( home_url( '/trainer/hisayoshi-yoshitake/' ) ); ?>">吉武永賀</a></dd>
            <dd><a href="<?php echo esc_url( home_url( '/trainer/yoshizumi-iwasaki/' ) ); ?>">岩﨑由純</a></dd>
          </dl>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/school/' ) ); ?>">SCHOOL</a></li>
        <li><a href="<?php echo esc_url( home_url( '/books/' ) ); ?>">BOOKS</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">CONTACT</a></li>
      </ul>
    </nav>
  </header>