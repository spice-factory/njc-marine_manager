<?php global $post; ?>
<?php get_header(); ?>

<?php
	$cats = get_the_category($post->ID);
	$tags = get_the_tags($post->ID);

	wpb_set_post_views($post->ID);
	wpb_get_post_views($post->ID);
?>
<main class="l-main page-container fadeIn-3">
  <div class="page-header container">
    <div class="min-wrapper article-wrapper">
      <div class="article-detail-title">
        <div class="article-cat-tag">
          <?php if(!empty($cats)): ?>
          <?php foreach($cats as $cat): ?>
          <span class="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></span>
          <?php endforeach; ?>
          <?php endif; ?>
          <div class="article-tag">
            <?php if(!empty($tags)): ?>
            <?php foreach($tags as $tag): ?>
            <span class="<?php echo $tag->slug; ?>"><a
                href="<?php echo home_url(); ?>/magazine/?ajax=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></span>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <h1><?php echo get_the_title($post->ID); ?></h1>
        <p><?php echo get_the_date('Y.m.d'); ?></p>
      </div>
      <!-- <figure class="article-img">
        <?php $featured_img = get_field('featured_img'); ?>
        <?php if(!empty($featured_img)): ?>
        <img src="<?php echo esc_url($featured_img['url']); ?>" alt="article img">
        <?php endif; ?>
      </figure> -->

      <div class="artilcle-block">
        <?php if(get_field('add_summary')[0] == "add_summ"): ?>
        <?php echo the_field('summary'); ?>
        <?php endif; ?>
        <?php the_content(); ?>
        <?php /*
         echo the_field('content');
         */  ?>
      </div>

      <div class="single-pager text-center">
        <a href="<?php echo site_url(); ?>/magazine/">
          <?php get_template_part('svg/single_back'); ?>
          <span>一覧に戻る</span>
        </a>
      </div>
    </div>
  </div>
</main>

<section class="recommend">
  <div class="container">
    <h2 class="headtitle fadeIn">おすすめ記事</h2>
    <div class="articleList">
      <ul class="articleList-item">
        <?php
					$post_tags = get_the_tags();
					if(!empty($post_tags)) {
						foreach ($post_tags as $tags) {
							$tag_ids[] = $tags->term_id;
						}
					}
        ?>
        <?php
				$args = array(
					'post_type' 	  => 'magazine',
					'posts_per_page' => '3',
					'meta_key' 		 => 'wpb_post_views_count',
					'orderby' 		 => 'meta_value_num',
					'order' 		 => 'DESC',
					'post__not_in'	 => array($post->ID),
					'tag__in'	  	 => $tag_ids,
				);
				$recommended = custom_query($args);
				?>
        <?php if($recommended->have_posts()): ?>
        <?php while($recommended->have_posts()): ?>
        <?php $recommended->the_post(); ?>
        <?php
          $post_cats = get_the_category();

          // For adding "New" tag in post
          date_default_timezone_set('Asia/Tokyo');
          $posted = strtotime($post->post_date);
          $current_time = strtotime('now');
          $one_week_since_posted = strtotime(date('Y-m-d H:i:s', $posted) . '+1 week');
        ?>
        <li class="artileListp-item-li fadeUp">
          <a href="<?php echo get_permalink(); ?>" class="article-permalink"><?php echo get_the_title(); ?></a>

          <figure class="article-thumb scaleThumb">
            <?php $featured_img = get_field('featured_img'); ?>
            <?php if(!empty($featured_img)): ?>
            <img src="<?php echo esc_url($featured_img['url']); ?>" alt="thumbnail">
            <?php else: ?>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/magazine_Detail/magazine_general.png"
              alt="thumbnail">
            <?php endif; ?>
          </figure>

          <?php if($current_time <= $one_week_since_posted): ?>
          <div class="new-item">
            <?php	get_template_part('svg/magazine_new'); ?>
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
            <div class="article-tag">
              <?php if(!empty(get_the_tags())):
                $tags = get_the_tags();
                ?>
              <?php foreach($tags as $post_tag): ?>
              <span class="<?php echo $post_tag->slug; ?>"><a
                  href="<?php echo home_url(); ?>/magazine/?ajax=<?php echo $post_tag->slug; ?>"><?php echo $post_tag->name; ?></a></span>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>
