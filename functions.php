<?php
/** 
 * ログイン時のメール通知フック 
 * 通知メールAPIは事務器さん側での提供
 *
 * @param string $user_login .
 * @param array $user_obj
 */
function custom_login_notification($user_login, $user_obj){
	include "/home/kusanagi/mail_notification/njc_mail_environment.php";
	$default_tz = date_default_timezone_get();
	date_default_timezone_set('Asia/Tokyo');
	$now = date('Y-m-d H:i:s');
	date_default_timezone_set($default_tz);
	$contents = "本番環境マリンマネージャサイトWordPressに新規ログインがありました\n\n";
	$contents .= "[日時] {$now}\n";
	$contents .= "[アカウント] {$user_login} : {$user_obj->data->user_email}";
	$mail_body = array(
		"personalizations" => array(
			array(
				"to" => array(
					array(
						"email" => $mail_to,
					)
				),
				"cc" => array(
					array(
						"email" => $mail_cc,
					)	
				),
				"subject" => $subject_marinemanager
			)
		),
		"from" => array(
			"email" => $mail_from,
			"name" => $from_name
		),
		"content" => array(
			array(
				"type" => "text/plain",
				"value" => $contents
			)
		)
	);
	$mail_body = json_encode($mail_body);

	$options = array(
		CURLOPT_URL => $endpoint,
		CURLOPT_HTTPHEADER => $request_header,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $mail_body,
		CURLOPT_RETURNTRANSFER => true,
	);

	$ch = curl_init();
	curl_setopt_array($ch, $options);

	$resp = curl_exec($ch);

	if(curl_errno($ch)){
		$err_msg = "";
		foreach(curl_getinfo($ch) as $key => $val){
			$err_msg .= $val . "\n";
		}
		file_put_contents("/tmp/custom_login.txt", $err_msg . "\n\n", FILE_APPEND | LOCK_EX);
	}	

	curl_close($ch);
}
add_action('wp_login', 'custom_login_notification', 10, 2);

/**
 * WP高速化系・セキュリティ向上系記述
 */


/**
 * 出力を抑制
 */
add_action( 'init', 'disable_output' );

function disable_output() {
  /* 不要タグの削除 */
  remove_action( 'wp_head', 'feed_links', 2 ); //サイト全体のフィード
  remove_action( 'wp_head', 'feed_links_extra', 3 ); //その他のフィード
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); //前後の記事リンク
  remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); //ショートリンク
  remove_action( 'wp_head', 'rel_canonical' ); //canonical属性
  remove_action( 'wp_head', 'wp_generator' ); //WPバージョン

  /* 不要タグの削除 & セキュリティ向上 */
  remove_action( 'wp_head', 'rsd_link' ); //Really Simple Discoveryリンク
  remove_action( 'wp_head', 'wlwmanifest_link' ); //Windows Live Writerリンク
  remove_action( 'wp_head', 'wp_generator' ); // wordpressバージョン情報の削除
    
  /* Embed記述を削除 */
  remove_action( 'wp_head','rest_output_link_wp_head' );
  remove_action( 'wp_head','wp_oembed_add_discovery_links' );
  remove_action( 'wp_head','wp_oembed_add_host_js' );
  
  /* 絵文字を削除 */
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}


/**
 * CSS・IJインクルードの省略可能属性を削除
 */
add_action('template_redirect', function(){
  ob_start(function($TypeDelete){
    $TypeDelete = str_replace(array('type="text/javascript"', "type='text/javascript'"), '', $TypeDelete);
    $TypeDelete = str_replace(array('type="text/css"', "type='text/css'"), '', $TypeDelete);
    return $TypeDelete;
  });
});

/**
 * DNSプリフェッチの記述を削除
 */
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

function remove_dns_prefetch( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		return array_diff( wp_dependencies_unique_hosts(), $hints );
	}
	return $hints;
}


/**
 * 不要タグの削除 & セキュリティ向上
 */
/* ピンバックヘッダの削除 */
add_filter('pings_open', function(){return 0;});


/**
 * WP標準のjQuery出力を無効化
 */
add_action('init', 'replace_jquery');

function replace_jquery() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
  }
}


/**
 * WP標準のJSを</body>前に移動
 */
add_action( 'wp_enqueue_scripts', 'move_scripts' );

function move_scripts() {
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
}

	
/**
 * ダッシュボード内の不要なメニューを非表示にする
 */
add_action( 'admin_menu', 'remove_menu', 999 );

function remove_menu() {
  // remove_menu_page( 'index.php' );                // ダッシュボード
  remove_menu_page( 'edit.php' );                 // 投稿
  // remove_menu_page( 'upload.php' );               // メディア
  // remove_menu_page( 'link-manager.php' );         // リンク
  // remove_menu_page( 'edit.php?post_type=page' );  // 固定ページ
  remove_menu_page( 'edit-comments.php' );        // コメント
  // remove_menu_page( 'themes.php' );               // 外観
  // remove_menu_page( 'plugins.php' );              // プラグイン
  // remove_menu_page( 'users.php' );                // ユーザー
  // remove_menu_page( 'tools.php' );                // ツール
  // remove_menu_page( 'options-general.php' );      // 設定
}

/* home_urlを返す */
add_shortcode('home_url', 'sc_home_url');

function sc_home_url($atts, $content = null) {
  return home_url();
}

/* テンプレートパスを返す */
add_shortcode('ss_path', 'sc_ss_path');

function sc_ss_path($atts, $content = null) {
  return get_stylesheet_directory_uri();
}


/**
 * 一部タグにショートコード反映
 */
add_filter( 'wp_kses_allowed_html', 'my_wp_kses_allowed_html', 10, 2 );

function my_wp_kses_allowed_html( $tags, $context ) {
	$tags['img']['srcset'] = true;
	$tags['source']['src'] = true;
	$tags['source']['srcset'] = true;
	$tags['script']['src'] = true;
	$tags['link']['href'] = true;
	return $tags;
}





/**
 * assets
 */
	function custom_styles() {
		wp_enqueue_style('ress-css', '//unpkg.com/ress/dist/ress.min.css');
		wp_enqueue_style('swiper-css', '//unpkg.com/swiper@7/swiper-bundle.min.css');
		wp_enqueue_style('styles-css', get_stylesheet_directory_uri() . '/css/styles.css',array(),'0.0.7');
	}
	add_action( 'wp_enqueue_scripts', 'custom_styles', 11);

	function custom_scripts() {
		wp_enqueue_script('jquery-js', '//code.jquery.com/jquery-3.6.0.min.js',array(), '',true);
		wp_enqueue_script('swiper-bundle-js', '//unpkg.com/swiper@7/swiper-bundle.min.js',array(), '',true);
		wp_enqueue_script('swiper-js', get_stylesheet_directory_uri() . '/js/swiper.js',array(), '',true);
		wp_enqueue_script('gsap-js', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js',array(), '',true);
		wp_enqueue_script('scroll-trigger-js', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js',array(), '',true);
		wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/main.js',array(), '0.0.6',true);
		wp_enqueue_script('lottie-js', '//unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js',array(), '',true);
		wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js',array(), '',true);
	}
	add_action('wp_enqueue_scripts', 'custom_scripts', 11);

	function ajax_scripts() {
		if(!is_singular('magazine')) {
			wp_enqueue_script('magazine-js', get_stylesheet_directory_uri() . '/js/magazine.js',array(), '',true);
		}
		wp_localize_script('magazine-js', 'ajax_object', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'place' => ''
		) );
	}
	add_action('wp_enqueue_scripts', 'ajax_scripts', 11);


/**
 * 既存
 */
	// Allow svg upload
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');

	// Site url
	function site_url_shortcode($atts) {
		return site_url();
	}
	add_shortcode('site_url', 'site_url_shortcode');

	function custom_query($custom_args) {

		$args = array(
				'post_status' 	  => 'publish',
				'orderby'		  => 'date',
				'order' 		  => 'DESC',
		);

		return new WP_Query(array_merge($args, $custom_args));
	}

/**
 * ajax posts
 */
	// Category filter
	function category_filter() {
		$cat = $_POST['category'];
		$args = array(
				'post_type'			=> 'magazine',
				'posts_per_page'	=> '9',
				'category_name'		=> $cat,
				'category__not_in'	=> 'uncategorized',
		);
		$response = '';
		$ajaxposts = custom_query($args);
		$post_count = $ajaxposts->found_posts;

		ob_start();
		if($ajaxposts->have_posts()):
			while($ajaxposts->have_posts()): $ajaxposts->the_post();
				get_template_part('template-parts/magazines');
			endwhile;
		endif;
		$output = ob_get_clean();

		$response = array(
			'html' => $output,
			'paged' => $paged,
			'post_count' => $post_count,
		);

		echo json_encode($response);
		wp_die();
	}
	add_action('wp_ajax_category_filter', 'category_filter');
	add_action('wp_ajax_nopriv_category_filter', 'category_filter');

	// Tag filter
	function tag_filter() {
		$tag = $_POST['tag'];
		$args = array(
				'post_type'			=> 'magazine',
				'posts_per_page'	=> '9',
				'tag'				=> $tag,
				'category__not_in'	=> 'uncategorized',
		);
		$response = '';
		$ajaxposts = custom_query($args);
		$post_count = $ajaxposts->found_posts;

		ob_start();
		if($ajaxposts->have_posts()):
			while($ajaxposts->have_posts()): $ajaxposts->the_post();
				get_template_part('template-parts/magazines');
			endwhile;
		endif;
		$output = ob_get_clean();

		$response = array(
			'html' => $output,
			'paged' => $paged,
			'post_count' => $post_count,
		);

		echo json_encode($response);
		wp_die();
	}
	add_action('wp_ajax_tag_filter', 'tag_filter');
	add_action('wp_ajax_nopriv_tag_filter', 'tag_filter');

	// Pagination
	function ajax_pagination() {
		$requested_page = intval($_POST['page']);
		$posts_per_page = intval($_POST['posts_per_page']);

		$category = $_POST['category'];
		if($_POST['tag']){
			$tag = $_POST['tag'];
		}

		$clicked = $_POST['clicked'];
		$current = $requested_page;

		if($clicked == 'prev') {
			$current = $current - 1;
		}

		$args = array(
			'post_type'		 	=> 'magazine',
			'posts_per_page' 	=> $posts_per_page,
			'offset' 		 	=> ($clicked == 'next') ? $current * $posts_per_page : ($current * $posts_per_page) - $posts_per_page,
			'category_name'  	=> $category,
			'tag'  				=> $tag,
			'category__not_in'	=> 'uncategorized',
		);
		$posts = custom_query($args);
		$post_count = $posts->found_posts;

		ob_start();
		if($posts->have_posts()):
			while($posts->have_posts()): $posts->the_post();
				get_template_part('template-parts/magazines');
			endwhile;
		endif;
		$output = ob_get_clean();

		if($clicked == 'next') {
			$current = $current + 1;
		}

		$response = array(
			'html' => $output,
			'clicked' => $clicked,
			'current_page' => $current,
			'paged'	=> $paged,
			'post_count' => $post_count,
		);

		echo json_encode($response);
		wp_die();
	}





	
add_action('wp_ajax_ajax_pagination', 'ajax_pagination');
add_action('wp_ajax_nopriv_ajax_pagination', 'ajax_pagination');

// Post Views
function wpb_set_post_views($post_id) {
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($post_id, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
	}else{
		$count++;
		update_post_meta($post_id, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Track Post Views
function wpb_track_post_views ($post_id) {
	if ( !is_single() ) return;
	if ( empty ( $post_id) ) {
		global $post;
		$post_id = $post->ID;
	}
	wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

// Get Post Views
function wpb_get_post_views($post_id){
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($post_id, $count_key, true);
	if($count==''){
		delete_post_meta($post_id, $count_key);
		add_post_meta($post_id, $count_key, '0');
		return "0 Views";
	}
	return $count.' Views';
}

	// Page title tag
	// add_filter( 'document_title_parts', 'get_page_title' );
	// function get_page_title($title) {
	// 	global $post;
	// 	if(is_front_page() || is_404()) {
	// 		$title['title'] = 'MarineManager（マリンマネージャー）| スマート水産業を漁業者のために';
	// 	}
	// 	if(is_page('about')) {
	// 		$title['title'] = 'MarineManagerについて | MarineManager（マリンマネージャー）';
	// 	}
	// 	if(is_page('solution')) {
	// 		$title['title'] = 'モバイルサービスを漁具の一つに　| MarineManager（マリンマネージャー）';
	// 	}
	// 	if(is_post_type_archive('magazine') || is_tag()) {
	// 		$title['title'] = 'マガジン | MarineManager（マリンマネージャー）';
	// 	}
	// 	if(is_post_type_archive('news')) {
	// 		$title['title'] = 'お知らせ | MarineManager（マリンマネージャー）';
	// 	}
	// 	if(is_single()) {
	// 		$cats = get_the_category($post->ID);
	// 		foreach ($cats as $cat) {
	// 			if($cat->slug == 'all') {
	// 				$title['title'] = 'NJC | MarineManager（マリンマネージャー）';
	// 			} else {
	// 				$title['title'] = $cat->name . ' | MarineManager（マリンマネージャー）';
	// 			}
	// 		}
	// 	}
	// 	return $title;
	// }


function custom_editor_settings( $initArray ){
	$initArray['block_formats'] = "見出し1=h2; 見出し2=h3; 見出し3=h4; 見出し4=h5; 段落=p; グループ=div;";
	return $initArray;
 }
 add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

 function mycus_year_rewrite_rules_invalid($rules) {
  unset($rules['posts/([0-9]{4})/?$']); 
  return $rules;
}
add_filter('rewrite_rules_array','mycus_year_rewrite_rules_invalid');

function mycus_year_rewrite_rules_invalid2($rules) {
  unset($rules['news/([0-9]{4})/?$']); 
  return $rules;
}
add_filter('rewrite_rules_array','mycus_year_rewrite_rules_invalid2');


/**
 * ページネーション
 */

if ( !function_exists( 'pagination' ) ) {
  function pagination($pages = '', $range = 2) {
    $prefix = "c-pager_num"; /* classのプレフィックスを指定 */

    /* PC・SPでレンジを変更 */
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
      $range = 2;
    } else {
      $range = 2;
    }
    $showitems = ($range * 2) + 1;

    global $paged; /* 現在のページを取得 */
    if (empty($paged)) $paged = 1; /* 取得できなかった場合デフォルトのページを定義 */

    if ($pages == '') {
      global $wp_query; /* 全ページ数を取得 */
      $pages = $wp_query->max_num_pages;
      if (!$pages) {
        $pages = 1;  /* 全ページ数が空の場合は、1とする */
      }
    }

    echo '<div class="' . $prefix . '">'
    . '<div class="' . $prefix . '__inner">';

    if ($paged > 1) {
      echo '<a class="' . $prefix . '__arr ' . $prefix . '__arr--prev" href="' . get_pagenum_link($paged - 1) . '"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M15.535 3.51501L7.04995 12L15.535 20.485L16.95 19.07L9.87795 12L16.95 4.92901L15.535 3.51501Z" fill="#001450"></path>
		</svg>';
      echo '<span class="c-pager_num_sptxt">PREV</span></a>';
    } else {
      echo '<span class="' . $prefix . '__arr"></span>';
    }
    
    for ($i = 1; $i <= $pages; $i++){
      if ( $i >= $paged - $range && $i <= $paged + $range ) {
        if( $paged == $i ){
          echo '<span class="' . $prefix . '__link ' . $prefix . '__link--current">' . $i . '</span>';
        } else {
          echo '<a class="' . $prefix . '__link ' . $prefix . '__link--normal" href="' .  get_pagenum_link($i) . '">' . $i . '</a>';
        }
      }
    }

    if ( $paged < $pages ) {
      echo '<a class="' . $prefix . '__arr ' . $prefix . '__arr--next" href="' . get_pagenum_link($paged + 1) . '">';
      echo '<span class="c-pager_num_sptxt">NEXT</span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M8.46505 20.485L16.95 12L8.46505 3.51498L7.05005 4.92999L14.122 12L7.05005 19.071L8.46505 20.485Z" fill="#001450"></path>
		</svg></a>';
    } else {
      echo '<span class="' . $prefix . '__arr"></span>';
    }
    
    echo '</div>'
    . '</div>';
  }
}




/**
 * 投稿クエリ制御 post_per_page
 */
add_action('pre_get_posts', 'archive_main_query');

function archive_main_query($query) {
  if (is_admin() || !$query->is_main_query()) {
    return;
  }
  /* block */
  if($query->is_post_type_archive('news')) {
    $query->set('posts_per_page', 5);
  }
  
  
}


/**
 * 投稿者アーカイブ無効化
 */
add_filter( 'author_rewrite_rules', '__return_empty_array' );
add_action( 'init', 'disable_author_archive' );

function disable_author_archive() {
  if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
    wp_redirect( home_url( '/404' ) );
    exit;
  }
}


function get_theme_image_url($atts) {
  $atts = shortcode_atts(
      array(
          'src' => '',
      ),
      $atts,
      'theme_img_url'
  );

  if ($atts['src']) {
      return esc_url(get_template_directory_uri() . $atts['src']);
  }
  return '';
}
add_shortcode('theme_img_url', 'get_theme_image_url');

// srcset用ショートコード関数
function get_theme_image_srcset($atts) {
  $atts = shortcode_atts(
      array(
          'srcset' => '',
      ),
      $atts,
      'theme_img_srcset'
  );

  if ($atts['srcset']) {
      $srcset_array = explode(', ', $atts['srcset']);
      $new_srcset = array();

      foreach ($srcset_array as $set) {
          $set_parts = explode(' ', $set);
          $new_srcset[] = esc_url(get_template_directory_uri() . $set_parts[0]) . ' ' . esc_attr($set_parts[1]);
      }

      return implode(', ', $new_srcset);
  }
  return '';
}
add_shortcode('theme_img_srcset', 'get_theme_image_srcset');
