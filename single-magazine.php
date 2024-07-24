<?php global $post; ?>
<?php get_header(); ?>

<?php
	$cats = get_the_category($post->ID);
	$tags = get_the_tags($post->ID);

	wpb_set_post_views($post->ID);
	wpb_get_post_views($post->ID);
?>
<main class="l-main page-container fadeIn-3" role="main">
    <div class="page-header container article-page-container">
        <div class="article-wrapper">
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
                <img src="./img/common/dummy01.jpeg" alt="article img">
            </figure> -->

            <div class="artilcle-block">
                <?php if(get_field('add_summary')[0] == "add_summ"): ?>
                <?php echo the_field('summary'); ?>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>

            <a href="<?php echo home_url('/download/'); ?>" class="download-cta-container">
                <div>    
                    <div class="download-cta-txt-wrapper">
                        <div class="download-cta-txt">
                            <span>モバイルサービスを漁具の一つに</span>
                            <h2>+reC. （プラスレック）がよくわかる<br>資料を無料でお配りしています</h2>
                        </div>
                        <div class="readmore-btn">
                            <p>資料ダウンロード</p>
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15C7.5 14.7514 7.59877 14.5129 7.77459 14.3371C7.9504 14.1613 8.18886 14.0625 8.4375 14.0625H19.2994L15.2737 10.0388C15.1866 9.95162 15.1174 9.84814 15.0703 9.73426C15.0231 9.62037 14.9988 9.49831 14.9988 9.37504C14.9988 9.25177 15.0231 9.1297 15.0703 9.01582C15.1174 8.90193 15.1866 8.79845 15.2737 8.71129C15.3609 8.62412 15.4644 8.55498 15.5783 8.50781C15.6922 8.46063 15.8142 8.43635 15.9375 8.43635C16.0608 8.43635 16.1828 8.46063 16.2967 8.50781C16.4106 8.55498 16.5141 8.62412 16.6012 8.71129L22.2262 14.3363C22.3136 14.4234 22.3828 14.5268 22.4301 14.6407C22.4773 14.7546 22.5017 14.8767 22.5017 15C22.5017 15.1234 22.4773 15.2455 22.4301 15.3594C22.3828 15.4732 22.3136 15.5767 22.2262 15.6638L16.6012 21.2888C16.5141 21.376 16.4106 21.4451 16.2967 21.4923C16.1828 21.5394 16.0608 21.5637 15.9375 21.5637C15.8142 21.5637 15.6922 21.5394 15.5783 21.4923C15.4644 21.4451 15.3609 21.376 15.2737 21.2888C15.0977 21.1127 14.9988 20.874 14.9988 20.625C14.9988 20.5018 15.0231 20.3797 15.0703 20.2658C15.1174 20.1519 15.1866 20.0485 15.2737 19.9613L19.2994 15.9375H8.4375C8.18886 15.9375 7.9504 15.8388 7.77459 15.6629C7.59877 15.4871 7.5 15.2487 7.5 15Z" fill="#0046DC"/>
                            </svg>
                        </div>
                    </div>
                    <figure class="download-mock-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/home/Mockup.png" 
                            srcset="<?php echo get_template_directory_uri(); ?>/img/home/Mockup.png 1x, <?php echo get_template_directory_uri(); ?>/img/home/Mockup@2x.png 2x" 
                            alt="solution image">
                    </figure>

                </div>
            </a>

            <div class="single-pager">
                <a href="<?php echo site_url(); ?>/magazine/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M12.9458 2.9292L5.875 10L12.9458 17.0709L14.125 15.8917L8.23167 10L14.125 4.10753L12.9458 2.9292Z" fill="white"/>
                    </svg>                              
                    <span>一覧に戻る</span>
                </a>
            </div>

    </div>

    <section class="recommend">
        <div>
            <div class="headtitle fadeIn">おすすめ記事</div>
            <div class="articleList">
                <ul class="articleList-item recommend-List-item">
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
                    <li class="artileListp-item-li">
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
                        <div class="new-item">
                          <svg viewBox="0 0 64 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M30.2079 0.0160416C39.724 0.36306 46.6604 7.67142 52.709 14.8494C58.9211 22.2213 65.3207 30.4132 63.763 39.836C62.1084 49.8457 54.2412 57.698 44.8942 62.1241C35.5108 66.5675 24.3419 67.684 15.1637 62.8495C6.39343 58.2299 2.67728 48.4637 0.81904 38.908C-0.935146 29.8874 -0.089339 20.5172 5.4946 13.1276C11.3496 5.37934 20.35 -0.343445 30.2079 0.0160416Z" fill="white"/>
                              <path d="M10.2505 39.9999V29.3599H12.6725L17.5166 35.8559V29.3599H20.0926V39.9999H17.6705L12.8265 33.4899V39.9999H10.2505Z" fill="#0046DC"/>
                              <path d="M22.3091 39.9999V29.3599H29.7151V31.5019H24.8991V33.5459H29.1411V35.6879H24.8991V37.8579H29.9111V39.9999H22.3091Z" fill="#0046DC"/>
                              <path d="M33.998 39.9999L30.848 29.3599H33.83L35.398 36.4439L37.358 29.4999H39.766L41.754 36.3179L43.2941 29.3599H46.2621L43.112 39.9999H40.55L38.534 33.1679L36.574 39.9999H33.998Z" fill="#0046DC"/>
                              <path d="M48.0635 36.3319L47.8115 28.9399H50.5835L50.3315 36.3319H48.0635ZM49.1975 40.0839C48.7681 40.0839 48.4228 39.9579 48.1615 39.7059C47.9001 39.4539 47.7695 39.1319 47.7695 38.7399C47.7695 38.3479 47.9001 38.0306 48.1615 37.7879C48.4228 37.5359 48.7681 37.4099 49.1975 37.4099C49.6175 37.4099 49.9581 37.5359 50.2195 37.7879C50.4901 38.0306 50.6255 38.3479 50.6255 38.7399C50.6255 39.1319 50.4901 39.4539 50.2195 39.7059C49.9581 39.9579 49.6175 40.0839 49.1975 40.0839Z" fill="#0046DC"/>
                          </svg> 
                        </div>
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
</main>
<?php get_footer(); ?>
