<?php get_header(); ?>

<div id="list" class="container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <a href="<?php the_permalink(); ?>">
        <article <?php post_class('clear'); ?>>
          <div class="eyecatch">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('thumbnail'); ?>
            <?php else : ?>
              <img src="<?php bloginfo('template_url'); ?>/images/noimage.png" alt="アイキャッチなし" />
            <?php endif; ?>
          </div>

          <div class="post">
            <h1><?php the_title(); ?></h1>

            <div class="postinfo right">
              <time datetime="<?php echo get_the_date('Y-m-d') ?>">
                <i class="far fa-clock"></i>
                <?php echo get_the_date(); ?>
              </time>

              <span class="postcat">
                <i class="far fa-folder-open"></i>
                <?php the_category(', '); ?>
                </sapn>
            </div>
          </div>
        </article>
      </a>

  <?php endwhile;
  endif; ?>

  <div class="clear">
    <?php if ($wp_query->max_num_pages > 1) : ?>
      <div class="pagenav">
        <span class="navleft">
          <?php previous_posts_link('<i class="fas fa-chevron-circle-left"></i> 新しい記事'); ?>
        </span>

        <span class="navright">
          <?php next_posts_link('古い記事 <i class="fas fa-chevron-circle-right"></i>'); ?>
        </span>
      </div>
    <?php endif; ?>
  </div>

</div>

<?php get_sidebar(); ?>

<?php get_footer();
