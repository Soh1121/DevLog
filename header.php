<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>DevLog - Sohのエンジニアブログ</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toppage.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/879fc12ee5.js"></script>
</head>
<body>
  <header>
    <div class="container">
      <div id="logo" class="leftcol">
        <h1>DevLog</h1>
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
            <li><a href="profile.html">PROFILE</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
