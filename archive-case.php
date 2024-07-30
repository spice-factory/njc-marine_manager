<?php
	global $post;
	get_header();
?>
<main class="l-main page-container" role="main">

  <section class="case-all">
      <div class="container">
          <h1 class="headtitle fadeIn">Case Studies</h1>
          <h2>
              <div class="solution-text-h2 pc">
                  <div class="title-h2 hidden"><span class="slideUp"><span>活用事例</span></span></div>
              </div>
              <div class="solution-text-h2 tab">
                  <div class="title-h2 hidden"><span class="slideUp"><span>活用事例</span></span></div>
              </div>
              <div class="solution-text-h2 sp">
                  <div class="title-h2 hidden"><span class="slideUp"><span>活用事例</span></span></div>
              </div>
          </h2>
          <?php
							get_template_part('template-parts/cases');
          ?>
      </div>
  </section>

  <section class="next-link reveal">
      <a href="<?php echo home_url('/about/'); ?>">
          <div class="next-link-wrapper next-about">
              <div class="wrapper next-link-area">
                <div class="next-link-text">
                    <div class="headtitle fadeIn">About Marine Manager</div>
                    <div class="top-about-text-h2 pc">
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>これからもずっと豊かな海と笑顔を</span></h2></div>
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>まもり・つくり・つなげる</span></h2></div>
                    </div>
                    <div class="top-about-text-h2 tab">
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>これからもずっと</span></h2></div>
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>豊かな海と笑顔を</span></h2></div>
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>まもり・つくり・つなげる</span></h2></div>
                    </div>
                    <div class="top-about-text-h2 sp">
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>これからもずっと</span></h2></div>
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>豊かな海と笑顔を</span></h2></div>
                      <div class="title-h2 hidden"><h2 class="slideUp-2"><span>まもり・つくり・つなげる</span></h2></div>
                    </div>
                    <h5 class="fadeIn">Marine Managerについて</h5>
                </div>
                <div class="next-button">NEXT</div>
            </div>
        </div>
      </a>
  </section>

</main>
<?php get_footer(); ?>
