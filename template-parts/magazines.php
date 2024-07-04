<?php
	global $post;
	$post_cats = get_the_category();
	$post_tags = get_the_tags();

	// For adding "New" tag in post
	date_default_timezone_set('Asia/Tokyo');
	$posted = strtotime($post->post_date);
	$current_time = strtotime('now');
	$one_week_since_posted = strtotime(date('Y-m-d H:i:s', $posted) . '+1 week');
 ?>
<li class="artileListp-item-li fadeUp">
  <a href="<?php echo get_permalink(); ?>" class="article-permalink"><?php echo get_the_title(); ?></a>
  <figure class="article-thumb scaleThumb">
    <?php $featured_img = get_field('featured_img', $post_id); ?>
    <?php if(!empty($featured_img)): ?>
    <img src="<?php echo esc_url($featured_img['url']); ?>" alt="thumbnail">
    <?php else: ?>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/magazine_Detail/magazine_general.png"
      alt="thumbnail">
    <?php endif; ?>
  </figure>
  <?php if($current_time <= $one_week_since_posted): ?>
  <div class="new-item">
    <?php get_template_part('svg/magazine_new'); ?>
  </div>
  <?php endif; ?>
  <div class="article-detail">
    <div class="article-date-category">
      <p><?php echo get_the_date('Y.m.d'); ?></p>
      <?php if(!empty($post_cats)): ?>
      <?php foreach($post_cats as $post_cat): ?>
      <span class="<?php echo $post_cat->slug; ?>"><?php echo $post_cat->name; ?></span>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
    <h3 class="article-title">
      <?php echo get_the_title(); ?>
    </h3>
    <div class="article-tag magazine-tag-link">
      <?php if(!empty($post_tags)): ?>
      <?php foreach($post_tags as $post_tag): ?>
      <span class="<?php echo $post_tag->slug; ?>"><a href=""
          data-tag-slag="<?php echo $post_tag->slug; ?>"><?php echo $post_tag->name; ?></a></span>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</li>