<div class="case-link-container">
  <div class="wrapper case-link-wrapper">
  <?php
    $args = array(
        'post_type'      => 'case',
        'posts_per_page' => 3,
        'category__not_in' => array( get_cat_ID('uncategorized') ),
        'order'          => 'ASC',
        'orderby'        => 'date' 
    );
    $cases = new WP_Query($args);
    ?>
    <?php $max_page = $cases->max_num_pages; ?>
    <li hidden>
      <input type="hidden" id="max_num_pages" value="<?php echo $max_page; ?>">
    </li>
    <?php if($cases->have_posts()): ?>
      <?php $case_number = 1; // カウンターを初期化 ?>
      <?php while($cases->have_posts()): ?>
        <?php $cases->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="case-link case<?php echo sprintf('%02d', $case_number); ?>">
            <figure class="case-thumb">
              <?php $featured_img = get_field('featured_img'); ?>
              <?php if(!empty($featured_img)): ?>
              <img src="<?php echo esc_url($featured_img['url']); ?>" alt="thumbnail">
              <?php else: ?>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/magazine_Detail/magazine_general.png"
                alt="thumbnail">
              <?php endif; ?>
            </figure>
            <div class="case-link-txt-wrapper">
                <span>Case<?php echo sprintf('%02d', $case_number); ?></span>
                <p class="case-link-title"><?php echo get_the_title(); ?></p>
            </div>
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15C7.5 14.7514 7.59877 14.5129 7.77459 14.3371C7.9504 14.1613 8.18886 14.0625 8.4375 14.0625H19.2994L15.2737 10.0388C15.1866 9.95162 15.1174 9.84814 15.0703 9.73426C15.0231 9.62037 14.9988 9.49831 14.9988 9.37504C14.9988 9.25177 15.0231 9.1297 15.0703 9.01582C15.1174 8.90193 15.1866 8.79845 15.2737 8.71129C15.3609 8.62412 15.4644 8.55498 15.5783 8.50781C15.6922 8.46063 15.8142 8.43635 15.9375 8.43635C16.0608 8.43635 16.1828 8.46063 16.2967 8.50781C16.4106 8.55498 16.5141 8.62412 16.6012 8.71129L22.2262 14.3363C22.3136 14.4234 22.3828 14.5268 22.4301 14.6407C22.4773 14.7546 22.5017 14.8767 22.5017 15C22.5017 15.1234 22.4773 15.2455 22.4301 15.3594C22.3828 15.4732 22.3136 15.5767 22.2262 15.6638L16.6012 21.2888C16.5141 21.376 16.4106 21.4451 16.2967 21.4923C16.1828 21.5394 16.0608 21.5637 15.9375 21.5637C15.8142 21.5637 15.6922 21.5394 15.5783 21.4923C15.4644 21.4451 15.3609 21.376 15.2737 21.2888C15.0977 21.1127 14.9988 20.874 14.9988 20.625C14.9988 20.5018 15.0231 20.3797 15.0703 20.2658C15.1174 20.1519 15.1866 20.0485 15.2737 19.9613L19.2994 15.9375H8.4375C8.18886 15.9375 7.9504 15.8388 7.77459 15.6629C7.59877 15.4871 7.5 15.2487 7.5 15V15Z" fill="white"/>
            </svg>   
        </a>
        <?php $case_number++; // カウンターをインクリメント ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>
</div>
