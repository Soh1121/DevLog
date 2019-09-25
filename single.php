<?php get_header(); ?>
  <main class="container center">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <section <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </section>
      <?php endwhile; ?>
      <?php comments_template('format=html5'); ?>
    <?php else: ?>
      <h2>投稿が見つかりません。</h2>
    <?php endif; ?>
  </main>
<?php get_footer();
