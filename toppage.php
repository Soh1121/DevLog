<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>

<main class="container center">
  <section id="toppic">
    <div class="top-picture"></div>
    <p class="right">Soh's<br>Engineer<br>Blog</p>
  </section>
  <section id="skills">
    <h2>skill</h2>
    <div class="skill-container">
      <div class="skill-box">
        <i class="fab fa-html5"></i>
        <h3>HTML/CSS</h3>
        <p>HTML/CSSでのコーディングができます。このサイトも自分でデザイン・コーディングしております。</p>
      </div>
      <div class="skill-box">
        <i class="fab fa-js"></i>
        <h3>JavaScript</h3>
        <p>簡単なWebアプリの作成を行えます。node.js・Vue.jsについても勉強中です。</p>
      </div>
      <div class="skill-box">
        <i class="fab fa-python"></i>
        <h3>Python</h3>
        <p>業務で使う各種処理を行うプログラムを自作しています。言語処理が得意です。</p>
      </div>
      <div class="skill-box">
        <i class="fab fa-aws"></i>
        <h3>AWS</h3>
        <p>VPC・EC2・RDS・API Gateway・Lambda・Route53・IAMを使用したことがあります。サーバレスアーキテクチャでRESTful API作成の経験もあります。</p>
      </div>
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

      <?php else :?>
        <h3 class="white">Comming Soon</h3>
      <?php
        // -------- WP_query終了-----------
        wp_reset_postdata();
        endif;
      ?>
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

  <section id="contact">
    <h2>contact</h2>
    <ul>
      <li class="twitter"><a href="https://twitter.com/soh_1121_"><i class="fab fa-twitter"></i></a></li>
      <li class="facebook"><a href="https://www.facebook.com/soichi.sato.16"><i class="fab fa-facebook-square"></i></a></li>
      <li class="github"><a href="https://github.com/Soh1121"><i class="fab fa-github"></i></a></li>
    </ul>
  </section>
</main>

<?php get_footer();
