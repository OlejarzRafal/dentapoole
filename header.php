<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
  <style>
    @font-face {
      font-family: 'Shania';
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/shania-quinton.woff2') format('woff2');
      font-display: swap;
      font-weight: 400;
    }
  </style>
  <!-- styles and scripts in functions.php -->


  <?php wp_head(); ?>
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9LFHT97');</script>
<!-- End Google Tag Manager -->
	
</head>

<body class="<?php if (is_front_page()): ?>home<?php else: ?>page_<?= get_the_ID(); ?><?php endif; ?>">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9LFHT97"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="preloader"></div>
  <header data-id="header">
    <?php get_template_part('components/component', 'header') ?>
    <?php get_template_part('components/component', 'menu-mobile') ?>
  </header>