<?php
  /*
  * Template Name: Page Template(thanks)
  */
 ?>
<?php
get_header();
remove_filter('the_content','wpautop');
if (have_posts()):
  while (have_posts()):
    the_post();
    the_content();
  endwhile;
  else :
endif;
get_footer();