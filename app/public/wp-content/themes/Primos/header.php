<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_field('title_description'); ?></title>
  <meta property = "og:title" content = "<?php the_field('og_title'); ?>">
  <meta property = "og:description" content="<?php the_field('og_description') ?>">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:site_name" content="<?php the_field('og_site_name'); ?>">
	<meta property="og:url" content="<?php bloginfo('url') ?>">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/og-image.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
  <!-- Caso o js do usuário estiver desativado isso será aplicado -->
  <noscript>
    <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
    </style>
  </noscript>
  <!-- Inicio wordpress Header-->
  <?php wp_head(); ?>
  <!-- Final wordpress Header-->      
</head>
<body>

  <header class="header">
    <div class="container">
      <a class="logo" href="/home/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Primos-logo.svg" alt="Primos">
      </a>
  
      <nav class="menu-nav">
        <?php
          $args = array(
            'menu' => 'principal',
            'theme_location' => 'menu-principal',
            'container' => false
          );
          wp_nav_menu( $args );
        ?>
      </nav>

    </div>  
  </header>
  
  <div class="header-mobile">
    <div class="backdrop backdrop--hidden"></div>
    <div class="container">
      <a href="/home/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Primos-logo-mobile.svg" alt="Primos logo">
      </a>
      <nav class="navigation">
        <button class="btn btn--menu" aria-expanded="false" aria-label="menu toggle">
          <img src="<?php echo get_template_directory_uri(); ?>/img/icon-hamburger.svg" alt="Icon hamburger" class="menu-icon">
        </button>
        <ul class="navigation-list navigation-list-hidden">
          <li class="navigation-list-item">
            <a href="/home/">Home</a>
          </li>
          <li class="navigation-list-item">
            <a href="/servicos/">Serviços</a>
          </li>
          <li class="navigation-list-item">
            <a href="/espaco/">Espaço</a>
          </li>
          <li class="navigation-list-item">
            <a href="/sobre/">Sobre</a>
          </li>
          <li class="navigation-list-item">
            <a href="/contato/">Contato</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  