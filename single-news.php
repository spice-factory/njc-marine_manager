<?php global $post; ?>
<?php get_header(); ?>

<main class="l-main page-container fadeIn-3">
  <div class="page-header container">
    <div class="min-wrapper article-wrapper">
      <div class="news-detail-title">
        <h1><?php echo get_the_title($post->ID); ?></h1>
        <p><?php echo get_the_date('Y.m.d'); ?></p>
      </div>

      <div class="artilcle-block">
        <?php echo the_content($post->ID); ?>
      </div>

      <div class="single-pager text-center">
        <a href="<?php echo site_url(); ?>/news/">
          <?php get_template_part('svg/single_back'); ?>
          <span>一覧に戻る</span>
        </a>
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>