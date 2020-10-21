<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="theme-color" content="#fff">
  <title>
    <?php blogInfo('name'); ?>
  </title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />

  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/favicon.ico" />
  <link rel="apple-touch-icon-precomposed"
    href="<?php echo esc_url(get_template_directory_uri()); ?>/images/icon/apple-touch.png">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/base.css" />
  <?php wp_head(); ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <?php get_header(); ?>

  <main id="main">
    
  </main>

  <?php get_footer(); ?>

  <?php wp_footer(); ?>
</body>

</html>