<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>
<h1><?php the_title(); ?></h1>

<div class="postinfo">
  <time datetime="<?php echo get_the_date('Y-m-d') ?>">
    <i class="far fa-clock"></i>
    <?php echo get_the_date(); ?>
  </time>

  <span class="postcat">
    <i class="far fa-folder-open"></i>
    <?php the_category(', '); ?>
  </sapn>
</div>

<?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();
