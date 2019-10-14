<?php get_header(); ?>
<main class="container center">
  <section id="404">
    <div class="white" id="page404">
      <h2>ページが見つかりません</h2>
      <p>
        お探しのページが見つかりませんでした。<br>
        代わりといってはなんですが、PortfolioやProfileはいかがでしょうか？
      </p>
    </div>
  </section>
  <section id="portfolio">
    <h2>portfolio</h2>
    <div class="works-box">
      <a href="#">
        <div class="sample"></div>
        <div class="works-box-inner">
          <div class="text-center">
            <h3>DevLog</h3>
            <small>2019.07.XX</small>
            <span class="button-readmore uppercase">Read More</span>
          </div>
        </div>
      </a>
    </div>
  </section>
  <section id="profile">
    <div class="white">
      <h2>Profile</h2>
      <a href="profile.html">
        <img src="../images/Soh-icon.png" alt="Sohの似顔絵イラスト">
        <p>
          ↑ Access ↑
        </p>
      </a>
    </div>
  </section>
  <section id="blog">
    <h2>blog</h2>
    <div class="blog-container">
      <div class="blog-box">
        <a href="#">
          <div class="sample"></div>
          <h3>タイトル</h3>
          <p class="right"><small>2019.07.XX</small></p>
        </a>
      </div>
      <div class="blog-box">
        <a href="#">
          <div class="sample"></div>
          <h3>タイトル</h3>
          <p class="right"><small>2019.07.XX</small></p>
        </a>
      </div>
      <div class="blog-box">
        <a href="#">
          <div class="sample"></div>
          <h3>タイトル</h3>
          <p class="right"><small>2019.07.XX</small></p>
        </a>
      </div>
    </div>
    <div class="button">
      <a href="#"><span class="button-readmore uppercase">Read More</span></a>
    </div>
  </section>
</main>
<?php get_footer();
