<?php
/*
* Template Name: News Page
*/
?>
<?php global $post; ?>
<?php get_header(); ?>

<main class="l-main page-container">
  <div class="page-header">
    <div class="container">
      <div class="min-wrapper informatinList-wrapper">
        <h1 class="headtitle text-center fadeIn">Information</h1>
        <div class="infoList">
          <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>
          <?php
            // For adding "New" tag in post
            date_default_timezone_set('Asia/Tokyo');
            $posted = strtotime($post->post_date);
            $current_time = strtotime('now');
            $one_month_since_posted = strtotime(date('Y-m-d H:i:s', $posted) . '+1 month');
          ?>
          <div class="infoList-item fadeUp">
            <a href="<?php echo get_permalink(); ?>">
              <div class="infoList-item-wrapper">
                <div class="infoList-new">
                  <?php if($current_time <= $one_month_since_posted): ?>
                  <?php get_template_part('svg/news_new'); ?>
                  <?php endif; ?>
                  <time class="infoList-item-date"><?php echo get_the_date('Y.m.d'); ?></time>
                </div>
                <h2 class="infoList-item-text"><?php echo get_the_title(); ?></h2>
              </div>
              <?php get_template_part('svg/news_item_arrow'); ?>
            </a>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="fadeUp">

          <?php function_exists("pagination") ? pagination($additional_loop->max_num_pages) : null; ?>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>