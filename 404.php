<?php get_header(); ?>

<main class="l-main page-container">
  <div class="page-header container notfound-container">
    <div class="min-wrapper notfound-wrapper">
      <div class="notfound-text">

        <div class="headtitle fadeIn">404 Page Not Found</div>

        <h2>
          <div class="top-about-text-h2 pc">
            <div class="title-h2 hidden">
              <span class="slideUp"><span>お探しのページが</span></span>
            </div>
            <div class="title-h2 hidden">
              <span class="slideUp"><span>見つかりませんでした。</span></span>
            </div>
          </div>
          <div class="top-about-text-h2 tab">
            <div class="title-h2 hidden">
              <span class="slideUp"><span>お探しのページが、</span></span>
            </div>
            <div class="title-h2 hidden">
              <span class="slideUp"><span>見つかりませんでした。</span></span>
            </div>
          </div>
          <div class="top-about-text-h2 sp">
            <div class="title-h2 hidden">
              <span class="slideUp"><span>お探しのページが、</span></span>
            </div>
            <div class="title-h2 hidden">
              <span class="slideUp"><span>見つかりませんでした。</span></span>
            </div>
          </div>
        </h2>

        <div class="top-about-text-p">
          <p class="p-medium">申し訳ございません。<br>
            お探しのページは見つかりませんでした。
          </p>
          <p class="p-medium">
            メニューから目的のページを選ぶか、<br>
            以下のボタンからホームへお戻りください。
          </p>
        </div>

        <div class="readmore-btn">
          <a href="<?php echo site_url(); ?>/">
            <p>ホームへ戻る</p>
            <?php
							get_template_part('svg/news_item_arrow')
						?>
          </a>
        </div>
      </div>

      <figure class="notfound-img fadeUp">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/404/404_img.png"
          srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/404/404_img.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/pages/404/404_img@2x.png 2x"
          alt="point image">
      </figure>

    </div>
  </div>
</main>
<?php get_footer(); ?>