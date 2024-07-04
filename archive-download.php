<?php
    /*
    * Template Name: Download Archive
    */
  global $post;
  get_header();
?>
<main class="l-main page-container">
    <div class="page-header container notfound-container">
        <div class="min-wrapper notfound-wrapper">
            <div class="notfound-text">
                <div class="headtitle fadeIn">Download</div>
                <h2>
                    <div class="top-about-text-h2 pc">
                        <div class="title-h2 hidden">
                            <span class="slideUp"><span>資料ダウンロード</span></span>
                        </div>
                    </div>
                    <div class="top-about-text-h2 tab">
                        <div class="title-h2 hidden">
                            <span class="slideUp"><span>資料ダウンロード</span></span>
                        </div>
                    </div>
                    <div class="top-about-text-h2 sp">
                        <div class="title-h2 hidden">
                            <span class="slideUp"><span>資料ダウンロード</span></span>
                        </div>
                    </div>
                </h2>
                <div class="top-about-text-p">
                    <p class="p-medium">MarineManagerにご興味いたただき、ありがとうございます。<br />
                        下記より資料がダウンロードできます。
                    </p>
                </div>
                <?php
                    $args = array(
                      'post_type' 	 	=> 'download',
                      'posts_per_page'	=> '9',
                      'category__not_in' => 'uncategorized',
                      'order'	  		=> 'ASC',
                    );
                    $document_downloads = custom_query($args);
                    ?>
                <?php $max_page = $document_downloads->max_num_pages; ?>
                <li hidden>
                    <input type="hidden" id="max_num_pages" value="<?php echo $max_page; ?>">
                </li>
                <table class="download-link-tbl">
                <?php if($document_downloads->have_posts()): ?>
                <?php while($document_downloads->have_posts()): ?>
                <?php $document_downloads->the_post(); ?>
                    <?php $file = get_field('pdf_file'); 
                        $fileurl = $file['url'];
                    ?>
                    <?php  if($file): ?>
                        <tr height="50px">
                            <td>                        
                                <a href="<?php echo $fileurl;?>">
                                    <p><?php echo get_the_title(); ?></p>
                                </a>
                            </td>
                            <td>                        
                                <a href="<?php echo $fileurl;?>">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5 9.99994C5 9.83418 5.06585 9.67521 5.18306 9.558C5.30027 9.44079 5.45924 9.37494 5.625 9.37494H12.8663L10.1825 6.69244C10.1244 6.63433 10.0783 6.56535 10.0468 6.48942C10.0154 6.4135 9.99921 6.33212 9.99921 6.24994C9.99921 6.16776 10.0154 6.08639 10.0468 6.01046C10.0783 5.93454 10.1244 5.86555 10.1825 5.80744C10.2406 5.74933 10.3096 5.70324 10.3855 5.67179C10.4614 5.64034 10.5428 5.62416 10.625 5.62416C10.7072 5.62416 10.7886 5.64034 10.8645 5.67179C10.9404 5.70324 11.0094 5.74933 11.0675 5.80744L14.8175 9.55744C14.8757 9.6155 14.9219 9.68447 14.9534 9.7604C14.9849 9.83633 15.0011 9.91773 15.0011 9.99994C15.0011 10.0822 14.9849 10.1636 14.9534 10.2395C14.9219 10.3154 14.8757 10.3844 14.8175 10.4424L11.0675 14.1924C11.0094 14.2506 10.9404 14.2966 10.8645 14.3281C10.7886 14.3595 10.7072 14.3757 10.625 14.3757C10.5428 14.3757 10.4614 14.3595 10.3855 14.3281C10.3096 14.2966 10.2406 14.2506 10.1825 14.1924C10.0651 14.0751 9.99921 13.9159 9.99921 13.7499C9.99921 13.6678 10.0154 13.5864 10.0468 13.5105C10.0783 13.4345 10.1244 13.3656 10.1825 13.3074L12.8663 10.6249H5.625C5.45924 10.6249 5.30027 10.5591 5.18306 10.4419C5.06585 10.3247 5 10.1657 5 9.99994V9.99994Z" fill="#0046DC"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
                </table>
                <?php wp_reset_postdata(); ?>
            </div>
            <figure class="notfound-img fadeUp">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/download/smart-fisheries-img01.png"
                    srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/pages/download/smart-fisheries-img01.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/pages/download/smart-fisheries-img01@2x.png 2x"
                    alt="point image">
            </figure>
        </div>
    </div>
</main>
<?php get_footer(); ?>