<html class="no-js">
   <head>
      <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
      <meta name="generator" content="Wordpress <?php bloginfo('version'); ?>">
      <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?PHP bloginfo('charset'); ?>"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
      <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
      <link href='https://fonts.googleapis.com/css?family=Martel' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Rubik' rel='stylesheet'>
      <script src="https://use.fontawesome.com/4299b7b486.js"></script>

      <?php wp_head(); ?>
   </head>
   
   <body <?php body_class(); ?>>
      <header class="banner" id="header">
         <div class="container">
            <div class="logo"> 
                <a href="<?php echo get_home_url() ?>"><img alt="Pyxys" src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
                </a>
            </div>
         </div>
         <div class="menu lazyloaded"> <button class="menu_button" id="abreMenu"> <i class="fa fa-bars"></i> </button> </div>
      </header>
      <section class="page_header d-flex align-items-center">
         <div class="container text-white">
            <div class="cont">
               <div class="sub text-white font-14 text-uppercase mb-2">CONTEÚDOS E INSIGHTS</div>
               <h1 class="h2 fw-900 mb-0 text-white">As últimas do nosso blog</h1>
            </div>
         </div>
         <div class="bg lazy entered loaded" style="background-image: url('https://zirak.com.br/pyxys/wp-content/uploads/2021/08/323315e56e937ac19847524bfd43dad0.jpeg');"></div>
      </section>
      <div class="bread">
         <div class="container">
            <div id="crumbs">
               <a href="<?php echo get_home_url() ?>">Home</a> - <a href="#">Blog</a> 
            </div>
         </div>
      </div>