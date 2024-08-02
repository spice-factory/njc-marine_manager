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

</main>
<?php get_footer(); ?>
