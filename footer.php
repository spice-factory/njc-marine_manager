<?php if(is_page_template('template-thanks.php')):?>


<?php elseif(!is_404() && !is_page('contact') && !is_page('download')): ?>
<div class="top-cta div-section">
  <div class="container">
    <div class="min-wrapper">
      <a href="<?php echo site_url(); ?>/contact/">
        <div class="contact fadeUp">
          <p class="ttl">お問い合わせ</p>
          <p>資料請求など、<br class="br-sp">まずはお気軽にお問い合わせください。</p>
          <?php get_template_part('svg/arrow_cta_contact'); ?>
        </div>
      </a>
    </div>
  </div>
</div>
<?php endif; ?>









<footer>
  <p class="l-footerLogo">
    <?php get_template_part('svg/footer_logo'); ?>
  </p>
  <nav class="l-footerlNavi">
    <div class="l-footerlNavi__inner">
      <ul class="l-footerlNaviMain">
        <li class="footerlNaviMain__item">
          <a class="footerlNaviMain__item-link" href="<?php echo site_url(); ?>/about/">私たちの思い</a>
        </li>
        <li class="footerlNaviMain__item">
          <a class="footerlNaviMain__item-link" href="<?php echo site_url(); ?>/solution/">プラスレックにできること</a>
        </li>
        <li class="footerlNaviMain__item">
          <a class="footerlNaviMain__item-link" href="<?php echo site_url(); ?>/magazine/">マガジン</a>
        </li>
        <li class="footerlNaviMain__item">
          <a class="footerlNaviMain__item-link" href="<?php echo site_url(); ?>/case/">事例</a>
        </li>
        <li class="footerlNaviMain__item">
          <a class="footerlNaviMain__item-link" href="<?php echo site_url(); ?>/news/">お知らせ</a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="l-footerLink">
    <div class="container">
      <div class="l-footerLink__inner">
        <ul class="l-footerLinkiMain">
          <li class="footerLinkMain__item">
            <a class="footerLinkMain__item-link" href="https://www.njc.co.jp/policy/legal" target="_blank">サイトのご利用条件</a>
          </li>
          <li class="footerLinkMain__item">
            <a class="footerLinkMain__item-link" href="https://www.njc.co.jp/policy" target="_blank">個人情報保護方針</a>
          </li>
          <li class="footerLinkMain__item">
            <a class="footerLinkMain__item-link" href="https://www.njc.co.jp/policy/handling"
              target="_blank">個人情報の取り扱いに関するご案内</a>
          </li>
          <li class="footerLinkMain__item">
            <a class="footerLinkMain__item-link" href="https://www.njc.co.jp/policy/environment"
              target="_blank">環境方針</a>
          </li>
          <li class="footerLinkMain__item">
            <a class="footerLinkMain__item-link" href="https://www.njc.co.jp/policy/security"
              target="_blank">情報セキュリティ方針</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="companyLink">
    <a href="https://www.njc.co.jp/" target="_blank">
      <p>運営会社：日本事務器株式会社</p>
      <?php get_template_part('svg/external'); ?>
    </a>
  </div>
  <p class="footer-copyright">© 2021 Nippon Jimuki Co., Ltd.</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>
