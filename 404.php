<?php get_header(); ?>
<main class="container center" id="page404">
  <section>
    <div class="white">
      <h2>ページが見つかりません</h2>
      <p>
        お探しのページが見つかりませんでした。<br>
        代わりといってはなんですが、PortfolioやProfileはいかがでしょうか？
      </p>
    </div>
  </section>
  <section id="portfolio">
    <h2>portfolio</h2>
    <?php
    // --- 新着ポートフォリオを3件表示 ---
    $args = array(
      'category_name'   =>  'portfolio',
      'posts_per_page'  =>  3
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
      ?>
      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="works-box">
          <a href="<?php the_permalink(); ?>">
            <div class="sample"></div>
            <div class="works-box-inner">
              <div class="text-center">
                <h3><?php the_title(); ?></h3>
                <small><?php the_time('Y.m.j'); ?></small>
                <span class="button-readmore uppercase">Read More</span>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <div class="button">
        <a href="<?php echo home_url(); ?>/category/portfolio/"><span class="button-readmore uppercase">Read More</span></a>

      <?php else : ?>
        <h3>Comming Soon</h3>
      <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
      endif;
      ?>
      </div>
  </section>

  <section id="profile">
    <div class="white">
      <h2>Profile</h2>
      <a href="<?php echo home_url(); ?>/profile/">
        <div class="profile-pic">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Soh-icon.png" alt="Sohの似顔絵イラスト">
        </div>
        <p>
          ↑ Access ↑
        </p>
      </a>
    </div>
  </section>

  <?php
  // --- 新着ブログを3件表示 ---
  $args = array(
    'category_name'   =>  'studylog', // ポートフォリオ以外のカテゴリを記述
    'posts_per_page'  =>  3
  );
  $the_query = new WP_Query($args);
  if ($the_query->have_posts()) :
    ?>

    <section id="blog">
      <h2>blog</h2>
      <div class="blog-container">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div class="blog-box">
            <a href="<?php the_permalink(); ?>">
              <div class="eyecatch">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('thumbnail'); ?>
                <?php else : ?>
                  <img src="<?php bloginfo('template_url'); ?>/images/noimage.png" alt="アイキャッチなし" />
                <?php endif; ?>
              </div>
              <h3><?php the_title(); ?></h3>
              <p class="right"><small><?php the_time('Y.m.j'); ?></small></p>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="button">
        <a href="<?php echo home_url(); ?>/list/"><span class=" button-readmore uppercase">Read More</span></a>
      </div>
    </section>

  <?php
    // -------- 新着情報WP_query終了-----------
    wp_reset_postdata();
  endif;
  ?>
</main>
<?php get_footer();
