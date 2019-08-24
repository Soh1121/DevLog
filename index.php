<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>記事一覧 | <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/destyle.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/toppage.css">
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
            <li><a href="profile.html">PROFILE</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <div class="container">
    <?php if(is_category()): ?>
    <h1 class="archive-title">
      <i class="fas fa-folder-open"></i>
      『<?php single_cat_title(); ?>』に関する記事
    </h1>
    <?php endif; ?>

    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <article <?php post_class(); ?>>
      <?php if(is_single()): ?>
      <h2><?php the_title(); ?></h2>
      <?php else: ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php endif; ?>
      <div class="postinfo">
        <time datetime="<?php echo get_the_date('Y-m-d')?>">
        <i class="far fa-clock"></i>
        <?php echo get_the_date(); ?>
        </time>

        <span class="postcat">
          <i class="fas fa-folder-open"></i>
          <?php the_category(','); ?>
        </span>
      </div>
      <?php the_content(); ?>
      <?php if (is_single()): ?>
      <div class="pagenav">
        <span class="old">
          <?php previous_post_link('%link', '<i class="fas fa-chevron-circle-left"></i> %title'); ?>
        </span>

        <span class="new">
          <?php next_post_link('%link', '%title <i class="fas fa-chevron-circle-right"></i>'); ?>
        </span>
      </div>
      <?php endif;?>
    </article>
    <?php endwhile; endif; ?>

    <?php if($wp_query->max_num_pages > 1): ?>
    <div class="pagenav">
      <span class="old">
        <?php next_posts_link('<i class="fas fa-chevron-circle-left"></i> 古い記事 '); ?>
      </span>

      <span class="new">
        <?php previous_posts_link(' 新しい記事 <i class="fas fa-chevron-circle-right"></i>'); ?>
      </span>
      <?php endif; ?>
    </div>

    <div class="blogmenu">
      <ul>
        <?php dynamic_sidebar(); ?>
      </ul>
    </div>
  </div>

  <footer>
    <small class="abel uppercase">&copy; Soichi SATO, All Rights Reserved.</small>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="script.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
