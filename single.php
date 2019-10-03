<?php get_header(); ?>
<main class="container center">
  <article id="entry">
    <div id="main-article">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <section <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="postinfo">
              <i class="far fa-clock"></i>
              <time class="date updated"><?php the_time('Y年n月j日'); ?></time>
            </div>
            <?php the_content(); ?>
          </section>
        <?php endwhile; ?>
    </div>
    <?php comments_template('format=html5'); ?>
  <?php else : ?>
    <h2>投稿が見つかりません。</h2>
    </div>
  <?php endif; ?>
  </article>
</main>
<?php get_footer();
