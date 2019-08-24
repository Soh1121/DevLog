<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(' | ', true, 'right'); bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toppage.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/profile.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/879fc12ee5.js"></script>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div id="logo" class="leftcol">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
      <div id="nav">
        <div id="responsive-btn">
          <span id="menu-btn">
            <i class="fas fa-bars"></i>
          </span>
          <span id="close-btn">
            <i class="fas fa-times"></i>
          </span>
        </div>
        <nav id="menu">
          <ul class="menu">
            <li><a href="<?php echo home_url(profile); ?>">PROFILE</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="<?php echo home_url(); echo '#contact'?>">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
