/* ==========================================================================
    Humberger Menu
========================================================================== */


document.querySelector('.headerMenu__text').addEventListener('click', function () {
  document.querySelector('.nav-menu').classList.toggle('is-open');
  document.querySelector('header').classList.toggle('is-open');
  document.querySelector('.html').classList.toggle('is-open');
});


/* ==========================================================================
    Scroll Animation
========================================================================== */


document.querySelectorAll(".zoomIn").forEach((el) => {
  gsap.fromTo(
    el,
    { scale: 1.2, opacity: 0 },
    {
      scale: 1,
      opacity: 1,
      duration: 0.5,
      // スクロールトリガーの登録
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
        ease: "Expo.easeInOut",
      },
    }
  );
});

document.querySelectorAll(".parallax").forEach((el) => {
  gsap.fromTo(
    el, {
    y: "0"
  },
    {
      y: "10rem",
      duration: 1,
      // スクロールトリガーの登録
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
        end: "+=2000",
        scrub: true,
        ease: "Expo.easeInOut",
      },
    }
  );
});

document.querySelectorAll(".parallax-fade").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
    y: "0"
  },
    {
      opacity: 1,
      y: "-8rem",
      duration: 1,
      // スクロールトリガーの登録
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
        end: "+=2000",
        ease: "Expo.easeInOut",
      },
    }
  );
});

document.querySelectorAll(".parallax-fade-2").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
    y: "0"
  },
    {
      opacity: 1,
      y: "-4rem",
      duration: 1,
      // スクロールトリガーの登録
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
        end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
      },
    }
  );
});

document.querySelectorAll(".fadeIn").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
  },
    {
      opacity: 1,
      duration: 1,
      scrollTrigger: {
        trigger: el,
        // start: "top 90%",
        // start: "-=600px bottom",
        start: "top 80%",
        // end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
      },
    }
  );
});

document.querySelectorAll(".fadeIn-2").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
  },
    {
      opacity: 1,
      duration: 1,
      delay: 0.5,
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
      },
    }
  );
});

document.querySelectorAll(".fadeIn-3").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
  },
    {
      opacity: 1,
      duration: 2,
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        end: "+=2000",
        ease: "Expo.easeInOut",
      },
    }
  );
});

document.querySelectorAll(".fadeUp").forEach((el) => {
  gsap.fromTo(
    el, {
    opacity: 0,
    y: "8rem"
  },
    {
      opacity: 1,
      y: "0",
      duration: 1,
      // スクロールトリガーの登録
      scrollTrigger: {
        trigger: el,
        start: "top 80%",
        ease: "Expo.easeInOut",
        // delay: 1,
      },
    }
  );
});

document.querySelectorAll(".slideUp").forEach((el) => {
  gsap.fromTo(
    el, {
    y: "6rem"
  },
    {
      y: "0",
      duration: 0.5,
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
        toggleClass: "is-active",
      },
    }
  );
});

document.querySelectorAll(".slideUp-2").forEach((el) => {
  gsap.fromTo(
    el, {
    y: "6rem"
  },
    {
      y: "0",
      duration: 0.5,
      delay: 0.5,
      scrollTrigger: {
        trigger: el,
        start: "-=600px bottom",
        // end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
        toggleClass: "is-active",
      },
    }
  );
});

document.querySelectorAll(".reveal").forEach((el) => {
  gsap.fromTo(
    el, {
    clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
    webkitclipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
  },
    {
      clipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)",
      webkitclipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)",
      duration: 1,
      ease: "Expo.easeInOut",
      scrollTrigger: {
        trigger: el,
        // start: "-=600px bottom",
        start: "top 80%",
        // end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
      },
    }
  );
});

document.querySelectorAll(".reveal-2").forEach((el) => {
  gsap.fromTo(
    el, {
    clipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
    webkitclipPath: "polygon(0 0, 0 0, 0 100%, 0% 100%)",
  },
    {
      clipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)",
      webkitclipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)",
      duration: 1.5,
      ease: "Expo.easeInOut",
      scrollTrigger: {
        trigger: el,
        start: "top 90%",
        end: "+=2000",
        ease: "Expo.easeInOut",
        delay: 1,
      },
    }
  );
});


/* ==========================================================================
    solution sticky Header
========================================================================== */

ScrollTrigger.matchMedia({

  // desktop
  "(min-width: 834px)": function () {
    // ScrollTrigger (this automatically gets killed when the breakpoint no longer matches...
    gsap.to('.function', {
      scrollTrigger: {
        trigger: '.function-nav-wrapper',
        start: 'top 120rem',
        end: 'bottom 700rem',
        endTrigger: '.function-point-wrapper',
        pin: '.function-nav-wrapper',
      }
    });
  }
});


/* ==========================================================================
    Sticky header
========================================================================== */

// index

ScrollTrigger.create({
  start: "top -80%",
  end: "bottom top",
  toggleClass: { className: 'scrolled', targets: ['.index-l-header', '.index-l-globalNavi'] },
});

// otherPage

ScrollTrigger.create({
  start: "+=20px top",
  toggleClass: { className: 'scrolled', targets: ['.l-header', '.l-globalNavi'] }
});


/* ==========================================================================
    Sticky SNS
========================================================================== */

ScrollTrigger.create({
  start: "top -30%",
  end: "bottom top",
  toggleClass: { className: 'scrolled', targets: '.index-sns' }
});

/* ==========================================================================
    solution anchor link + story summary anchor link
========================================================================== */

$('.page-link a[href*="#"]').click(function () {//全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
  var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
  var pos = $(elmHash).offset().top - 120;//idの上部の距離からHeaderの高さを引いた値を取得
  $('body,html').animate({ scrollTop: pos }, 1000); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
  return false;
});

if (navigator.userAgent.indexOf('Android') > 0) {
  let body = document.getElementsByTagName('body')[0];
  body.classList.add('Android');
}