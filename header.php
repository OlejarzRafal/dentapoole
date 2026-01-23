<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
  <meta name="google-site-verification" content="EjeelzOYDHFCYOvBmz9upAyCf3ODcB4hO-l2G3D3Z4g" />
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
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W9LFHT97');</script>
  <!-- End Google Tag Manager -->

  <!-- Meta Pixel Code -->
  <script>!function (f, b, e, v, n, t, s) { if (f.fbq) return; n = f.fbq = function () { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) }; if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0; t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s) }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', '922699686885489'); fbq('track', 'PageView');</script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=922699686885489&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

</head>



<body class="<?php if (is_front_page()): ?>home<?php else: ?>page_<?= get_the_ID(); ?><?php endif; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9LFHT97" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="preloader"></div>
  <header data-id="header">
    <?php get_template_part('components/component', 'header') ?>
    <?php get_template_part('components/component', 'menu-mobile') ?>
  </header>

  <!-- WhatsApp Floating Button -->
  <a href="https://wa.me/07701256295" target="_blank" rel="noopener noreferrer" class="whatsapp-float"
    aria-label="Otwórz WhatsApp">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"
        fill="currentColor" />
    </svg>
  </a>