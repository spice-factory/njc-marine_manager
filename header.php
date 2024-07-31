<!DOCTYPE html>
<html class="html" <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2ZTC4P');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, viewport-fit=cover">
  <meta name="format-detection" content="telephone=no">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right');bloginfo('name');?></title>
  <?php wp_head(); ?>
  <?php get_template_part('template-parts/script_adobe_font'); ?>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2ZTC4P"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <?php
    global $post;

    if(is_single() || is_page()) {
      $page_slug = $post->post_name;
    }
    if(is_tag()) {
      $post_archive_slug = 'magazine';
    }

    // Archive page slug
    if (get_post_type()) {
      $post_type = get_post_type();
      $post_type_data = get_post_type_object( $post_type );
      $post_archive_slug = $post_type_data->rewrite['slug'];
    }
  ?>
  <div class="l-wrapper">
    <header class="<?php echo is_front_page() ? "index-" : ""; ?>l-header">
      <?php
        $tag_logo = "p";
        if(is_front_page()){
          $tag_logo = "h1";
        }
        ?>
      <<?php echo $tag_logo; ?> class="l-headerLogo">
        <a class="l-headerLogo__link" href="<?php echo site_url(); ?>">
          <?php if(is_front_page()): ?>
          <?php get_template_part('svg/header_logo_top'); ?>
          <?php else: ?>
          <?php get_template_part('svg/header_logo'); ?>
          <?php endif; ?>
        </a>
      </<?php echo $tag_logo; ?>>

      <button id="Menu" class="<?php echo is_front_page() ? "index " : ""; ?>l-headerMenu" aria-label="close">
        <span class="headerMenu__text">
          <span class="headerMenu__text-default">MENU</span>
          <span class="headerMenu__text-close">CLOSE</span>
        </span>
      </button>
    </header>

    <nav class="<?php echo is_front_page() ? "index index-" : ""; ?>l-globalNavi nav-menu">
      <div class="l-glovalNavi__inner">
        <ul class="l-globalNaviMain">
          <li class="globalNaviMain__item <?php echo ($page_slug == 'about') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/about/">私たちの思い</a>
          </li>
          <li class="globalNaviMain__item <?php echo ($page_slug == 'solution') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/solution/">プラスレックにできること</a>
          </li>
          <li class="globalNaviMain__item <?php echo ($post_archive_slug == 'magazine') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/magazine/">マガジン</a>
          </li>
          <li class="globalNaviMain__item <?php echo ($post_archive_slug == 'case') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/case/">事例</a>
          </li>
          <li class="globalNaviMain__item <?php echo ($post_archive_slug == 'news') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/news/">お知らせ</a>
          </li>
          <li class="globalNaviMain__item <?php echo ($post_archive_slug == 'download') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link" href="<?php echo site_url(); ?>/download/">資料ダウンロード</a>
          </li>

          <!-- 契約者用ページができるまでは、非表示 -->
          <!-- <li class="globalNaviMain__item">
                          <a class="globalNaviMain__item-link " href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/user_icon.svg" alt="usericon">ログイン</a>
                      </li> -->
          <!-- 契約者用ページができるまでは、非表示 -->

          <li class="globalNaviMain__item <?php echo ($slug == 'contact') ? 'is-current' : ''; ?>">
            <a class="globalNaviMain__item-link contact-cta" href="<?php echo site_url(); ?>/contact/">
              <?php get_template_part('svg/mail_header'); ?>
              お問い合わせ
            </a>
          </li>
        </ul>
      </div>

      <div class="subNavi">
        <div class="companyLink">
          <a href="https://www.njc.co.jp/" target="_blank">
            <p>運営会社：日本事務器株式会社</p>
            <?php get_template_part('svg/external_header'); ?>
          </a>
        </div>

        <p class="footer-copyright">© 2021 Nippon Jimuki Co., Ltd.</p>
      </div>
    </nav>






    <?php if(!(is_404() || is_page_template('template-thanks.php'))): ?>
    <div class="tab-bottom-nav">
      <div class="container">
        <div class="bottom-nav-wrapper">
          <ul>
            <li class="bottom-nav-item contact-btn">
              <a class="bottom-nav-item-link" href="<?php echo site_url(); ?>/contact/"><img
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/mail_icon.svg" alt="usericon">お問い合わせ</a>
            </li>

            <!-- <span></span>

                      <li class="bottom-nav-item login-btn">
                          <a class="bottom-nav-item-link" href="./contact.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/user_icon_yellow.svg" alt="usericon">ログイン</a>
                      </li> -->
          </ul>
        </div>
      </div>
    </div>


    <?php if(!is_page_template('template-thanks.php')):?>
    <div class="<?php echo is_front_page() ? "index-" : ""; ?>sns">
      <p>SHARE</p>
      <span></span>
      <?php
        $sns_link = urlencode(get_the_permalink());
        if(is_post_type_archive()){
          $sns_link = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        }


        $sns_text = urlencode(get_the_title() . ' | ' . get_bloginfo('name'));
        if(is_front_page()){
          $sns_text = urlencode(get_bloginfo("name") . " | " . get_bloginfo("description"));
        } elseif (is_post_type_archive('magazine')) {
          $sns_text = urlencode("マガジン | " . get_bloginfo("description"));
        } elseif (is_post_type_archive('news')) {
          $sns_text = urlencode("お知らせ | " . get_bloginfo("description"));
        }
      ?>
      <a href="https://twitter.com/share?url=<?php echo $sns_link; ?>&text=<?php echo $sns_text; ?>" target="_blank">
        <?php get_template_part('svg/share_twitter'); ?>
      </a>
      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $sns_link; ?>" target="_blank">
        <?php get_template_part('svg/share_fb'); ?>
      </a>
    </div>
    <?php endif; ?>
    <?php endif; ?>
