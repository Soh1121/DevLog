<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>記事一覧 | DevLog - Sohのエンジニアブログ</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toppage.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/879fc12ee5.js"></script>

</head>
<body <?php body_class(); ?>>
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

  <?php if (have_posts()): while (have_posts()): the_post(); ?>
  <article <?php post_class(); ?>>
  <h2><?php the_title(); ?></h2>
  <time datetime="<?php echo get_the_date('Y-m-d')?>">
  <?php echo get_the_date(); ?>
  </time>
  <?php the_content(); ?>
  </article>
<?php endwhile; endif; ?>

  <footer>
    <small class="abel uppercase">&copy; Soichi SATO, All Rights Reserved.</small>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
