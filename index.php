<?php get_header(); ?>

<div class="container">

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

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

<?php if($wp_query->max_num_pages > 1): ?>
  <div class="pagenav">
    <span class="navleft">
      <?php previous_posts_link('<i class="fas fa-chevron-circle-left"></i> 新しい記事'); ?>
    </span>
    
    <span class="navright">
      <?php next_posts_link('古い記事 <i class="fas fa-chevron-circle-right"></i>'); ?>
    </span>
  </div>
<?php endif;?>

</div>

<?php get_sidebar(); ?>

<?php get_footer();
