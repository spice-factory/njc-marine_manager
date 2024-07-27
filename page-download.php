<?php
	/*
	* Template Name: Contact Form
	*/
 ?>
<!DOCTYPE html>
<html lang="ja" class="html">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-P2ZTC4P');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right');bloginfo('name');?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <!--CSS-->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/styles.css">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/common/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/common/apple-touch-icon.png">
  <link rel="icon" type="image/png"
    href="<?php echo get_stylesheet_directory_uri(); ?>/img/common/android-chrome-192×192.png">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2ZTC4P"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="l-wrapper">

    <header class="l-header">
      <h1 class="l-headerLogo">
        <a class="l-headerLogo__link" href="<?php echo site_url(); ?>/">

          <?php get_template_part('svg/header_logo'); ?>
        </a>
      </h1>
    </header>
    <main class="l-main download-container">
      <div class="page-header container notfound-container">
          <div class="min-wrapper min-wrapper-flex">
            <div class="min-wrapper-flex-item">
              <div class="headtitle fadeIn">Download</div>
              <h2>
                  <div class="pc">
                      <div class="title-h2 hidden">
                          <span class="slideUp"><span>資料ダウンロード</span></span>
                      </div>
                  </div>
                  <div class="tab">
                      <div class="title-h2 hidden">
                          <span class="slideUp"><span>資料ダウンロード</span></span>
                      </div>
                  </div>
                  <div class="sp">
                      <div class="title-h2 hidden">
                          <span class="slideUp"><span>資料ダウンロード</span></span>
                      </div>
                  </div>
              </h2>
              <figure class="download-thumb">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/Dummy.jpg">
              </figure>
              <div class="download-contents">
                <h3 class="download-ttl">この資料の内容</h3>
                <?php the_content(); ?>
              </div>
            </div>
            <div class="min-wrapper-flex-item">
              <iframe src="https://go.njc.co.jp/l/278662/2024-07-22/rs67v" width="100%" height="1270" type="text/html" frameborder="0" allowTransparency="true" style="border: 0"></iframe>
            </div>
          </div>
      </div>
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/download.js"></script>
<?php get_footer(); ?>
