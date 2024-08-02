<?php
/*
* Template Name: Magazine Archive
*/
	global $post;
	get_header();
?>

<?php
  $get_page_id = get_page_by_path("magazine");
  $get_page_id = $get_page_id->ID;
  $posts = get_field('rel_magazine',$get_page_id);
  if( $posts ):
?>
<main class="l-main page-container arc-mag">
  <div class="page-header container">
    <div class="pickup-container">
      <h1 class="headtitle fadeIn">Pick up</h1>
      <div class="pickup-swiper">
        <div class="swiper-wrapper">

          <?php foreach( $posts as $val ): ?>
          <div class="swiper-slide">
            <div class="pickup-contents">
              <a href="<?php echo get_permalink($val->ID); ?>"
                class="pickup-article-permalink"><span><?php echo get_the_title($val->ID); ?></span></a>

              <div class="pickup-contents-text fadeUp">
                <div class="pickup-title">
                  <h2><span><?php echo get_the_title($val->ID); ?></span></h2>
                  <p><?php echo get_the_date('Y.m.d',$val->ID); ?></p>
                </div>
              </div>

              <figure class="pickup-thumb scaleThumb pickup-contents-img reveal">
                <?php $featured_img = get_field('featured_img',$val->ID); ?>
                <?php if(!empty($featured_img)): ?>
                <img src="<?php echo esc_url($featured_img['url']); ?>" alt="thumbnail">
                <?php else: ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/magazine_Detail/magazine_general.png"
                  alt="thumbnail">
                <?php endif; ?>
              </figure>

            </div>
          </div>
          <?php endforeach; ?>


        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</main>
<?php endif; ?>

<section class="magazine" id="magazine-list">
  <div class="container">
    <div class="category-select-wrapper">
      <h2 class="headtitle fadeIn">Magazine</h2>
      <div class="cat-select">
        <?php
					$cats = get_categories(array(
            'orderby' 		=> 'id',
            'order'	  		=> 'ASC',
					));
				?>
        <ul>
          <li class="cat<?php echo ($cat->slug) == 'all' ? '' : ' active' ?> catall">
            <a href="!#" class="cat-all cat-item" data-slug="">
              <?php get_template_part('svg/cat_all'); ?>
              <p>すべて</p>
            </a>
          </li>
          <?php foreach($cats as $cat): ?>
          <?php $array_compare = ['minato','story','case']; ?>
          <?php if(in_array($cat->slug,$array_compare)): ?>
          <li
            class="cat<?php echo ($cat->slug) == 'all' ? ' active' : '' ?> <?php echo ($cat->slug == 'uncategorized') ? 'cat-uncategorized' : '' ?>">
            <a href="!#" class="cat-<?php echo $cat->slug; ?> cat-item" data-slug="<?php echo $cat->slug; ?>">
              <?php if($cat->slug == 'minato'): ?>
              <?php get_template_part('svg/cat_minato'); ?>
              <p><?php echo $cat->name; ?></p>

              <?php elseif($cat->slug == 'story'): ?>
              <?php get_template_part('svg/cat_story'); ?>
              <p><?php echo $cat->name; ?></p>
              <?php endif; ?>
            </a>
          </li>

          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="articleList">
      <ul class="articleList-item">
        <?php
          $args = array(
            'post_type' 	 	=> 'magazine',
            'posts_per_page'	=> '9',
            'category__not_in' => 'uncategorized',
          );
          $magazines = custom_query($args);
        ?>
        <?php $max_page = $magazines->max_num_pages; ?>
        <li hidden>
          <input type="hidden" id="max_num_pages" value="<?php echo $max_page; ?>">
        </li>
        <?php if($magazines->have_posts()): ?>
        <?php while($magazines->have_posts()): ?>
        <?php $magazines->the_post(); ?>
        <?php
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
            <div class="article-tag">
              <?php if(!empty($post_tags)): ?>
              <?php foreach($post_tags as $post_tag): ?>
              <span class="<?php echo $post_tag->slug; ?>"><a href=""
                  data-tag-slug="<?php echo $post_tag->slug; ?>"><?php echo $post_tag->name; ?></a></span>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <div class=" min-wrapper">
        <div class="pagination magazine-pagination">
          <a href="#" data-clicked='prev'>
            <div class="prev magazine-prev">
              <?php get_template_part('svg/solution_arrow_prev'); ?>
              <span>PREV</span>
            </div>
          </a>
          <a href="#" data-clicked='next'>
            <div class="next magazine-next">
              <span>NEXT</span>
              <?php get_template_part('svg/solution_arrow_next'); ?>
            </div>
          </a>
        </div>
        <?php wp_reset_postdata(); ?>
        <div class="tag fadeUp">
          <div class="headtitle text-center">Tags</div>
          <div class="tagList-wrapper">
            <ul>
              <?php $tags = get_tags(); ?>
              <?php if(!empty($tags)): ?>
              <?php foreach($tags as $tag): ?>
              <li class="tag-item">
                <a href="" data-tag-slug="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a>
              </li>
              <?php endforeach; ?>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="next-link reveal">
  <a href="<?php echo home_url('/magazine/'); ?>">
    <div class="next-link-wrapper next-magazine">
      <div class="wrapper next-link-area">
        <div class="next-link-text">
          <div class="headtitle fadeIn">Magazine</div>
          <h2>
            <div class="top-about-text-h2 pc">
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"><span>今よりも、</span></span>
              </div>
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"
                  ><span>もっともっと良い未来へ</span></span
                >
              </div>
            </div>
            <div class="top-about-text-h2 tab">
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"><span>今よりも、</span></span>
              </div>
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"
                  ><span>もっともっと良い未来へ</span></span
                >
              </div>
            </div>
            <div class="top-about-text-h2 sp">
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"
                  ><span>今よりも、もっともっと</span></span
                >
              </div>
              <div class="title-h2 hidden">
                <span class="slideUp-2 ttl"><span>良い未来へ</span></span>
              </div>
            </div>
          </h2>
          <h3 class="fadeIn">マガジン</h3>
        </div>
        <div class="next-button">NEXT</div>
      </div>
    </div>
  </a>
</section>

<?php get_footer(); ?>
