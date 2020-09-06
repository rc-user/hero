<?php if (! dcp\lpb\is_uridas()) : ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K7JXCTM');</script>
  <!-- End Google Tag Manager -->  
  
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if (!get_theme_support('title-tag')) : ?>
      <title><?php wp_title(''); ?></title>
    <?php endif; ?>
    <?php wp_head();?>
</head>
  
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7JXCTM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  
  
<?php endif; ?>
<?php if (get_field('display_header')) : ?>
<header id="header" class="header header-<?php the_field('header_style', 'option'); ?>" <?php dcp\lpb\the_background_style(get_field('header_background_use_background_setting', 'option'), get_field('header_background_background_color', 'option'), get_field('header_background_background_image', 'option'), get_field('header_background_background_image_display', 'option'), get_field('header_background_background_image_fix', 'option'), get_field('header_background_background_image_darken', 'option')); ?>>
    <div class="container">
        <nav <?php dcp\lpb\the_header_classes(); ?>>
          <span class="navbar-brand <?php the_field('logo_position', 'option'); ?> my-0 h1">
                <?php if (get_field('logo', 'option')) : ?>
                <img src="<?php the_field('logo', 'option'); ?>" class="d-inline-block img-fluid" alt="<?php echo bloginfo('name'); ?>" width="<?php the_field('logo_width', 'option'); ?>">
                <?php else : ?>
                <?php echo bloginfo('name'); ?>
                <?php endif; ?>
            </span>
        </nav>
    </div>
</header>
<?php endif; ?>
