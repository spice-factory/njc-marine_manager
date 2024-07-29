<?php
/*
** Template Name: Top Page
*/
?>
<?php get_header(); ?>


<main class="l-main">
  <div class="pg-top-visual">
    <div class="pg-top-visual-main-contents">
      <span class="copy">
        <?php get_template_part('svg/kv_copy'); ?>
      </span>
    </div>
    <div class="pg-top-visual-video fadeIn">
      <video class="c-objectfit-video" src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/mm_movie.mp4"
        data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/mm_movie.mp4" type="video/mp4" muted autoplay
        webkit-playsinline playsinline loop preload></video>
      <div class="video-wave parallax"></div>
    </div>
    <div class="scroll fadeIn-2">
      <p class="scroll-text">SCROLL</p>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ScrollFish_icon.svg" alt="scroll">
    </div>
  </div>
</main>

<section class="top-about">
  <div class="container">
    <div class="shipimg parallax-fade">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/ship_img.svg" alt="">
    </div>
    <div class="scallopimg parallax-fade-2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Scallop_img.svg" alt="">
    </div>

    <div class="content-wrapper">
      <div class="top-about-image">
        <figure class="about-img01 zoomIn">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img01.jpg"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img01.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img01@2x.jpg 2x"
            alt="about image">
        </figure>
        <figure class="about-img02 zoomIn">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img02.jpg"
            srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img02.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img02@2x.jpg 2x"
            alt="about image">
        </figure>
        <div class="Fishimg parallax-fade">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Fish_img.svg" alt="">
        </div>
      </div>
      <div class="top-about-text">
        <div class="headtitle fadeIn">About MarineManager</div>
        <h2 class="top-about-text-h2">
          <div class="title-h2 hidden">
            <span class="slideUp"><span class="h2-sp">これからもずっと</span></span>
          </div>
          <div class="title-h2 hidden">
            <span class="slideUp"><span class="h2-sp">豊かな海と笑顔を</span></span>
          </div>
          <div class="title-h2 hidden">
            <span class="slideUp"><span class="h2-sp">まもり・つくり・つなげる</span></span>
          </div>
        </h2>
        <div class="top-about-text-p">
          <p class="p-medium">いま、日本の漁業は正念場をむかえています。<br>漁師の高齢化・後継者不足に資源減少…<br>
            直面している課題はどれも解決が急がれるものばかり。
          </p>
          <p class="p-medium">
          そこでNJCは、最新のIT技術と「人」中心のビジネスデザインを武器に、<br class="br-pc">スマート水産業の推進、<br class="br-pc">ひいては漁業の持続発展を支援します。
          </p>
          <p class="p-medium">
          海で陸で、それぞれの持場でたたかう漁業関係者を支える<br class="br-pc">サービスとし「MarineManager」がスタートしました。
          </p>
        </div>
        <figure class="njc_logo">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/100th_Logo.svg" alt="">
        </figure>
        <p class="about__small-text">日本事務器（NJC）は、2024年2月1日に創業100周年を迎えました。</p>

        <!-- <div class="readmore-btn">
          <a href="<?php echo site_url(); ?>/about/">
            <p>MarineManagerについて<br class="br-sp">くわしく知る</p>
            <?php get_template_part('svg/news_item_arrow'); ?>
          </a>
        </div> -->
      </div>
    </div>

    <div class="content-wrapper about__wrapper">
      <div class="top-about-text about__secondary">
        <div class="headtitle fadeIn">About Marine Manager</div>
        <div class="top-about-text-h2">
            <div class="title-h2 hidden"><h2 class="slideUp"><span class="h2-sp">MARINE MANAGER +reC.とは</span></h2></div>
        </div>
        <div class="top-about-text-p">
            <p class="p-large"><span class="p-medium">MarineManager +reC.は</span><br>
                気付き・記憶からはじまり、<br>勘と経験をデジタルで支え、<br>
                漁業の未来へつなげるサービスです。
            </p>
            <p class="p-medium">
                明日の自分のために、来年の自分のために、<br class="br-pc">
                みんなのために、そして次世代のために。<br>
                漁業に携わる方々の力になりたい、そんな願いを込めています。
            </p>
        </div>
        <div class="readmore-btn">
            <a href="<?php echo home_url('/case/'); ?>">
                <p>Marine Managerについて</p>
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15C7.5 14.7514 7.59877 14.5129 7.77459 14.3371C7.9504 14.1613 8.18886 14.0625 8.4375 14.0625H19.2994L15.2737 10.0388C15.1866 9.95162 15.1174 9.84814 15.0703 9.73426C15.0231 9.62037 14.9988 9.49831 14.9988 9.37504C14.9988 9.25177 15.0231 9.1297 15.0703 9.01582C15.1174 8.90193 15.1866 8.79845 15.2737 8.71129C15.3609 8.62412 15.4644 8.55498 15.5783 8.50781C15.6922 8.46063 15.8142 8.43635 15.9375 8.43635C16.0608 8.43635 16.1828 8.46063 16.2967 8.50781C16.4106 8.55498 16.5141 8.62412 16.6012 8.71129L22.2262 14.3363C22.3136 14.4234 22.3828 14.5268 22.4301 14.6407C22.4773 14.7546 22.5017 14.8767 22.5017 15C22.5017 15.1234 22.4773 15.2455 22.4301 15.3594C22.3828 15.4732 22.3136 15.5767 22.2262 15.6638L16.6012 21.2888C16.5141 21.376 16.4106 21.4451 16.2967 21.4923C16.1828 21.5394 16.0608 21.5637 15.9375 21.5637C15.8142 21.5637 15.6922 21.5394 15.5783 21.4923C15.4644 21.4451 15.3609 21.376 15.2737 21.2888C15.0977 21.1127 14.9988 20.874 14.9988 20.625C14.9988 20.5018 15.0231 20.3797 15.0703 20.2658C15.1174 20.1519 15.1866 20.0485 15.2737 19.9613L19.2994 15.9375H8.4375C8.18886 15.9375 7.9504 15.8388 7.77459 15.6629C7.59877 15.4871 7.5 15.2487 7.5 15Z" fill="#0046DC"/>
                    </svg>
            </a>
        </div>
      </div>
      <div class="top-about-image03">
          <div class="about-img03">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Index_about_img03.svg" alt="">
          </div>
      </div>
      
  </div>
  </div>
</section>

<section class="top-solution">
    <div class="mm_logo">
        <svg viewBox="0 0 1411 86" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 83.453V1.19064H17.8596L44.0537 51.1975L70.1395 1.19064H87.3497V83.453H71.8714V24.2458L50.3316 65.377H37.0181L15.4783 24.1375V83.453H0Z" fill="white" fill-opacity="0.5"/>
            <path d="M99.7169 83.453L132.405 1.19064H149.832L182.629 83.453H165.202L157.409 61.805H123.963L116.169 83.453H99.7169ZM128.509 49.0327H152.755L140.632 15.2618L128.509 49.0327Z" fill="white" fill-opacity="0.5"/>
            <path d="M194.917 83.453V1.19064H221.977C228.254 1.19064 233.666 2.27304 238.213 4.43784C242.759 6.60264 246.258 9.66944 248.712 13.6382C251.165 17.607 252.392 22.3335 252.392 27.8177C252.392 32.8689 251.129 37.3067 248.604 41.1312C246.078 44.8835 242.831 47.8782 238.862 50.1151L260.51 83.453H242.001L224.683 54.2282C224.105 54.2282 223.564 54.2282 223.059 54.2282H210.611V83.453H194.917ZM219.812 13.6382H210.611V41.7806H219.271C230.6 41.7806 236.264 37.0902 236.264 27.7094C236.264 18.3286 230.78 13.6382 219.812 13.6382Z" fill="white" fill-opacity="0.5"/>
            <path d="M273.56 83.453V1.19064H290.12V83.453H273.56Z" fill="white" fill-opacity="0.5"/>
            <path d="M309.816 83.453V1.19064H324.428L368.265 59.532V1.19064H383.311V83.453H368.698L324.861 25.2199V83.453H309.816Z" fill="white" fill-opacity="0.5"/>
            <path d="M403.046 83.453V1.19064H457.382V14.0712H418.524V35.0698H452.945V47.9503H418.524V70.5725H458.898V83.453H403.046Z" fill="white" fill-opacity="0.5"/>
            <path d="M499.447 83.453V1.19064H517.307L543.501 51.1975L569.587 1.19064H586.797V83.453H571.319V24.2458L549.779 65.377H536.465L514.926 24.1375V83.453H499.447Z" fill="white" fill-opacity="0.5"/>
            <path d="M599.164 83.453L631.853 1.19064H649.279L682.076 83.453H664.649L656.856 61.805H623.41L615.617 83.453H599.164ZM627.956 49.0327H652.202L640.079 15.2618L627.956 49.0327Z" fill="white" fill-opacity="0.5"/>
            <path d="M694.364 83.453V1.19064H708.976L752.813 59.532V1.19064H767.859V83.453H753.246L709.409 25.2199V83.453H694.364Z" fill="white" fill-opacity="0.5"/>
            <path d="M780.234 83.453L812.922 1.19064H830.349L863.146 83.453H845.719L837.926 61.805H804.479L796.686 83.453H780.234ZM809.026 49.0327H833.271L821.148 15.2618L809.026 49.0327Z" fill="white" fill-opacity="0.5"/>
            <path d="M910.519 84.6437C901.499 84.6437 893.634 82.9479 886.923 79.5564C880.212 76.0927 874.98 71.258 871.228 65.0522C867.548 58.8465 865.708 51.5583 865.708 43.1878C865.708 34.6007 867.656 27.06 871.553 20.5656C875.449 14.0712 880.861 9.02 887.789 5.412C894.788 1.804 902.87 0 912.034 0C917.013 0 921.956 0.577278 926.863 1.73184C931.842 2.81424 936.316 4.40176 940.285 6.4944L937.579 20.0244C933.61 18.0761 929.389 16.5968 924.915 15.5866C920.441 14.5763 915.967 14.0712 911.493 14.0712C905.648 14.0712 900.525 15.2618 896.123 17.6431C891.794 20.0244 888.402 23.3438 885.949 27.6012C883.495 31.8586 882.268 36.8377 882.268 42.5383C882.268 51.2697 884.866 58.161 890.062 63.2122C895.329 68.2634 902.473 70.789 911.493 70.789C914.235 70.789 916.833 70.6086 919.286 70.2478C921.812 69.887 924.302 69.3458 926.755 68.6242V50.4398H910.411V37.884H941.909V78.5822C937.218 80.6027 932.203 82.1181 926.863 83.1283C921.523 84.1386 916.075 84.6437 910.519 84.6437Z" fill="white" fill-opacity="0.5"/>
            <path d="M959.362 83.453V1.19064H1013.7V14.0712H974.84V35.0698H1009.26V47.9503H974.84V70.5725H1015.21V83.453H959.362Z" fill="white" fill-opacity="0.5"/>
            <path d="M1032.09 83.453V1.19064H1059.15C1065.42 1.19064 1070.84 2.27304 1075.38 4.43784C1079.93 6.60264 1083.43 9.66944 1085.88 13.6382C1088.33 17.607 1089.56 22.3335 1089.56 27.8177C1089.56 32.8689 1088.3 37.3067 1085.77 41.1312C1083.25 44.8835 1080 47.8782 1076.03 50.1151L1097.68 83.453H1079.17L1061.85 54.2282C1061.27 54.2282 1060.73 54.2282 1060.23 54.2282H1047.78V83.453H1032.09ZM1056.98 13.6382H1047.78V41.7806H1056.44C1067.77 41.7806 1073.43 37.0902 1073.43 27.7094C1073.43 18.3286 1067.95 13.6382 1056.98 13.6382Z" fill="white" fill-opacity="0.5"/>
            <path d="M1151.4 73.495V53.4706H1132.67V40.9147H1151.4V20.8903H1164.82V40.9147H1183.55V53.4706H1164.82V73.495H1151.4Z" fill="white" fill-opacity="0.5"/>
            <path d="M1199.69 83.453V28.3589H1214.08L1214.19 39.2911C1215.49 35.4666 1217.44 32.5442 1220.04 30.5237C1222.71 28.431 1225.81 27.3847 1229.34 27.3847C1230.5 27.3847 1231.65 27.493 1232.81 27.7094C1234.04 27.9259 1235.01 28.2146 1235.73 28.5754L1234.43 42.7548C1233.49 42.394 1232.38 42.0693 1231.08 41.7806C1229.78 41.492 1228.59 41.3477 1227.5 41.3477C1223.39 41.3477 1220.22 42.827 1217.98 45.7855C1215.74 48.6719 1214.62 52.8572 1214.62 58.3414V83.453H1199.69Z" fill="white" fill-opacity="0.5"/>
            <path d="M1273.72 85.1849C1267.08 85.1849 1261.35 84.0303 1256.51 81.7212C1251.75 79.3399 1248.07 75.9484 1245.47 71.5466C1242.95 67.1449 1241.68 61.9494 1241.68 55.9601C1241.68 50.1873 1242.87 45.1 1245.26 40.6982C1247.64 36.2965 1250.96 32.8689 1255.21 30.4154C1259.47 27.8898 1264.34 26.627 1269.83 26.627C1275.17 26.627 1279.78 27.7455 1283.68 29.9825C1287.58 32.2194 1290.57 35.3945 1292.66 39.5076C1294.83 43.6207 1295.91 48.4554 1295.91 54.0118C1295.91 55.8158 1295.8 57.6919 1295.59 59.6402H1256.3C1257.81 68.8046 1264.16 73.3867 1275.35 73.3867C1278.45 73.3867 1281.59 73.062 1284.76 72.4126C1287.94 71.691 1290.86 70.6807 1293.53 69.3818L1295.05 80.6388C1292.23 82.082 1288.95 83.2005 1285.2 83.9942C1281.44 84.788 1277.62 85.1849 1273.72 85.1849ZM1269.39 37.5593C1265.86 37.5593 1262.93 38.6778 1260.63 40.9147C1258.32 43.1517 1256.87 46.3628 1256.3 50.5481H1281.84C1281.84 49.7543 1281.77 49.0327 1281.62 48.3833C1281.12 44.9196 1279.78 42.2497 1277.62 40.3735C1275.53 38.4974 1272.78 37.5593 1269.39 37.5593Z" fill="white" fill-opacity="0.5"/>
            <path d="M1350.75 84.6437C1341.95 84.6437 1334.23 82.9118 1327.59 79.4482C1321.02 75.9845 1315.93 71.1137 1312.32 64.8358C1308.72 58.4857 1306.91 51.1254 1306.91 42.7548C1306.91 36.4769 1307.99 30.7402 1310.16 25.5446C1312.32 20.277 1315.39 15.767 1319.36 12.0146C1323.4 8.19016 1328.13 5.2316 1333.54 3.13896C1339.02 1.04632 1345.05 0 1351.62 0C1356.09 0 1360.64 0.613361 1365.25 1.84008C1369.94 2.99464 1373.95 4.58216 1377.27 6.60264L1374.56 20.5656C1366.62 16.5968 1359.05 14.6124 1351.83 14.6124C1346.28 14.6124 1341.41 15.767 1337.22 18.0761C1333.03 20.3852 1329.79 23.6324 1327.48 27.8177C1325.17 32.003 1324.01 36.8738 1324.01 42.4301C1324.01 48.0586 1325.17 52.9294 1327.48 57.0425C1329.79 61.1556 1333.03 64.3667 1337.22 66.6758C1341.48 68.9128 1346.46 70.0313 1352.16 70.0313C1355.84 70.0313 1359.81 69.454 1364.06 68.2994C1368.39 67.1449 1372.43 65.5934 1376.19 63.6451L1377.92 78.041C1374.17 80.1337 1369.91 81.7573 1365.15 82.9118C1360.38 84.0664 1355.58 84.6437 1350.75 84.6437Z" fill="white" fill-opacity="0.5"/>
            <path d="M1400.92 84.1025C1398.26 84.1025 1396.05 83.2726 1394.32 81.613C1392.59 79.8811 1391.72 77.7524 1391.72 75.2268C1391.72 72.629 1392.59 70.5003 1394.32 68.8406C1396.05 67.181 1398.26 66.3511 1400.92 66.3511C1403.67 66.3511 1405.9 67.181 1407.64 68.8406C1409.37 70.5003 1410.23 72.629 1410.23 75.2268C1410.23 77.7524 1409.37 79.8811 1407.64 81.613C1405.9 83.2726 1403.67 84.1025 1400.92 84.1025Z" fill="white" fill-opacity="0.5"/>
        </svg>
    </div>
    <div class="container">
        <div class="wrapper">
        <div class="top-solution-container">

        <div class="top-solution-contents">
            <div class="headtitle fadeIn text-center">Solution</div>
            <div class="top-about-text-h2 slideUp">
                <div class="title-h2 hidden text-center"><h2 class="slideUp"><span>よろしく、プラスレック</span></h2></div>
            </div>
            <figure class="bubble zoomIn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/bubble.svg" alt="">
            </figure>

            
            <div class="solution-swiper fadeUp">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                        <figure class="rec_magazine-img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/rec_magazine_01.svg" alt="">
                        </figure>
                  </div>
                  <div class="swiper-slide">
                    <figure class="rec_magazine-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/rec_magazine_02.svg" alt="">
                    </figure>
                </div>
                <div class="swiper-slide">
                    <figure class="rec_magazine-img">
                      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/rec_magazine_03.svg" alt="">
                    </figure>
                </div>

                  <div class="pagination">
                    <div class="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M12.9458 2.9292L5.875 10L12.9458 17.0709L14.125 15.8917L8.23167 10L14.125 4.10753L12.9458 2.9292Z" fill="white"/>
                        </svg>
                        <span>前のページ</span>
                    </div>
                    <div class="next">
                        <span>次のページ</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.05417 17.0708L14.125 9.99997L7.05417 2.92913L5.875 4.1083L11.7683 9.99997L5.875 15.8925L7.05417 17.0708Z" fill="white"/>
                        </svg>
                    </div>
                </div>

                </div>
            </div>

            <div class="readmore-btn">
                <a href="<?php echo home_url('/case/'); ?>">
                    <p>活用方法をみる</p>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 15C7.5 14.7514 7.59877 14.5129 7.77459 14.3371C7.9504 14.1613 8.18886 14.0625 8.4375 14.0625H19.2994L15.2737 10.0388C15.1866 9.95162 15.1174 9.84814 15.0703 9.73426C15.0231 9.62037 14.9988 9.49831 14.9988 9.37504C14.9988 9.25177 15.0231 9.1297 15.0703 9.01582C15.1174 8.90193 15.1866 8.79845 15.2737 8.71129C15.3609 8.62412 15.4644 8.55498 15.5783 8.50781C15.6922 8.46063 15.8142 8.43635 15.9375 8.43635C16.0608 8.43635 16.1828 8.46063 16.2967 8.50781C16.4106 8.55498 16.5141 8.62412 16.6012 8.71129L22.2262 14.3363C22.3136 14.4234 22.3828 14.5268 22.4301 14.6407C22.4773 14.7546 22.5017 14.8767 22.5017 15C22.5017 15.1234 22.4773 15.2455 22.4301 15.3594C22.3828 15.4732 22.3136 15.5767 22.2262 15.6638L16.6012 21.2888C16.5141 21.376 16.4106 21.4451 16.2967 21.4923C16.1828 21.5394 16.0608 21.5637 15.9375 21.5637C15.8142 21.5637 15.6922 21.5394 15.5783 21.4923C15.4644 21.4451 15.3609 21.376 15.2737 21.2888C15.0977 21.1127 14.9988 20.874 14.9988 20.625C14.9988 20.5018 15.0231 20.3797 15.0703 20.2658C15.1174 20.1519 15.1866 20.0485 15.2737 19.9613L19.2994 15.9375H8.4375C8.18886 15.9375 7.9504 15.8388 7.77459 15.6629C7.59877 15.4871 7.5 15.2487 7.5 15Z" fill="#0046DC"/>
                        </svg>
                </a>
            </div>
        </div>
</div>
    </div>
</section>

<section class="top-uservioice">
  <h2 class="headtitle text-center fadeIn">Users Voice</h2>
  <div class="rec-voice">
    <figure class="rec-voice-img">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img08.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img08.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img08@2x.png 2x"
              alt="usersvoice image">
    </figure>

    <div class="rec-voice-text_wrapper">
        <p class="rec-voice-text">マリマネプラスレックをご利用いただいた方のご感想</p>
        <figure class="polygon">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/Polygon.svg" alt="">
        </figure>
    </div>
</div>
  <div class="voice-auto-scroll">
    <div class="swiper-wrapper">
      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-green">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img01.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img01.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img01@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>次の世代が見た時に<br>教科書になるイメージだね</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-blue">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img02.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img02.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img02@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>家で日記で見るんじゃなくて、<br>その場で見れるのは良い！</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-orange">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img03.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img03.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img03@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>いつもと様子が違う時に写真を撮る。写真と行動記録が一緒に残せるのは良いね。</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-navy">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img04.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img04.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img04@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>記憶に頼っていたけど、記録するのもいいかもしれない</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-green">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img05.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img05.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img05@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>沖に出る前に水温と潮の流れがわかると、無駄な出航が減らせて便利だなぁ</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-blue">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img06.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img06.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img06@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>いつもより網にすっごく魚が入ってる！組合に教えよう！！って時に便利だ！</p>
        </div>
      </div>

      <div class="swiper-slide voice-container">
        <div class="voice-wrapper voice-orange">
          <?php get_template_part('svg/voice-dquote');?>
          <figure class="voice-img-auto-scroll-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img07.png"
              srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img07.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/img/home/users-voice-img07@2x.png 2x"
              alt="usersvoice image">
          </figure>
          <p>今は良くても、いつ何が起きるかわからないから、今のうちに対策しておきたかったんだ</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="top-magazine">
  <div class="container">
    <div class="headtitle text-center fadeIn">Magazine</div>
    <div class="articleList">
      <ul class="articleList-item">
        <?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$args = array(
							'post_type'		 => 'magazine',
							'posts_per_page'  => '6',
							'paged' => $paged,
							// 'category_name'  => 'all',
					);
					$magazines = custom_query($args);
				?>
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
            <div class="article-tag top-tag-link">
              <?php if(!empty($post_tags)): ?>
              <?php foreach($post_tags as $post_tag): ?>
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

      <div class="center-btn">
        <div class="readmore-btn">
          <a href="<?php echo site_url(); ?>/magazine/">
            <p>もっと見る</p>
            <?php get_template_part('svg/news_item_arrow'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="top-information div-section">
  <div class="container">
    <div class="wrapper">
      <div style="text-align: center;">
        <div class="headtitle fadeIn">Information</div>
      </div>
      <div class="infoList">
        <?php
						$args = array(
							'post_type'		 => 'news',
							'posts_per_page' => '3',
						);
						$news = custom_query($args);
					 ?>
        <?php if($news->have_posts()): ?>
        <?php while($news->have_posts()): $news->the_post(); ?>
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
                <?php	get_template_part('svg/news_new'); ?>
                <?php endif; ?>
                <time class="infoList-item-date"><?php echo get_the_date('Y.m.d'); ?></time>
              </div>
              <p class="infoList-item-text"><?php echo get_the_title(); ?></p>
            </div>
            <?php get_template_part('svg/news_item_arrow'); ?>
          </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
      <div style="text-align: center;">
        <div class="readmore-btn">
          <a href="<?php echo site_url(); ?>/news/">
            <p>もっと見る</p>
            <?php get_template_part('svg/news_item_arrow'); ?>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>

<section class="top-smartfisheries">
  <div class="container">
    <div class="content-wrapper align-center">
      <div class="top-sf-text o-1">
        <div class="headtitle fadeIn">Why Smart Fisheries?</div>
        <div class="top-about-text-h2">
          <div class="title-h2 hidden">
            <h2 class="slideUp"><span>スマート水産業とは</span></h2>
          </div>
        </div>
      </div>
      <div class="top-sf-image o-2" id="Lottie">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_pzwtqb9a.json" background="transparent"
          speed="1" loop autoplay></lottie-player>
      </div>
    </div>
    <div class="content-wrapper align-center  flex-row">
      <div class="top-sf-contets-text o-2 tab-o-1">
        <div class="top-about-text-h4 fadeIn-2">
          <h3 class="reveal-2"><span>ICTやIoTの利用により科学的な資源管理へ</span></h3>
        </div>
        <div class="top-sf-text-p fadeIn-2">
          <p class="p-medium">デジタルテクノロジーにより、データを集める・残し繋げる・分析するというフル活用にて、科学的な水産資源の管理を行っていく
          </p>
        </div>
      </div>
      <div class="top-sf-image o-1 tab-o-2">
        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_85ngm7mi.json" background="transparent"
          speed="1" loop autoplay></lottie-player>
      </div>
    </div>
    <div class="content-wrapper align-center">
      <div class="top-sf-contets-text o-1">
        <div class="top-about-text-h4 fadeIn-2">
          <h3 class="reveal-2"><span>水産業の成長産業化をめざし持続的な漁業へ</span></h3>
        </div>
        <div class="top-sf-text-p fadeIn-2">
          <p class="p-medium">水産業の成長産業化を目指し、デジタルテクノロジーを活用しながら、地域コミュニティの維持・他分野との協力・効率的な操業や経営、新規ビジネス創出の支援をしていく
          </p>
        </div>
      </div>
      <div class="top-sf-image o-2">
        <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_70y2obzk.json" background="transparent"
          speed="1" loop autoplay></lottie-player>
      </div>
    </div>
    <div class="center-btn">
      <div class="readmore-btn">
        <a href="<?php echo site_url(); ?>/magazine/">
          <p>記事を読む</p>
          <?php get_template_part('svg/news_item_arrow'); ?>
        </a>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
