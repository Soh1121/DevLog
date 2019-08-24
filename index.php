<?php get_header(); ?>

  <div class="container">
    <?php if(is_category()): ?>
    <h1 class="archive-title">
      <i class="fas fa-folder-open"></i>
      『<?php single_cat_title(); ?>』に関する記事
    </h1>
    <?php endif; ?>

    <?php if(is_month()): ?>
    <h1 class="archive-title">
      <i class="far fa-clock"></i>
      <?php echo get_the_date('Y年n月'); ?>に投稿した記事
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

        <span class="postcom">
          <i class="fas fa-comments"></i>
          <a href="<?php comments_link(); ?>">
            <?php comments_number(
              'コメント',
              'コメント1件',
              'コメント（%件）'
            ); ?>
          </a>
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
      <?php comments_template(); ?>
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

        <li class="widget">
          <ul>
            <li>
              <a href="<?php bloginfo('rss2_url'); ?>"><i class="fas fa-rss-square"></i> RSS</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>

<?php get_footer(); ?>
