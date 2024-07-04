document.addEventListener("DOMContentLoaded", function(event) {
  var slider1 = new Swiper ('.mock-swiper', {
      pagination: {
        el: '.swiper-pagination',
      },
	  loop: true, // ループの有効化
      effect: "fade",
      fadeEffect: {
      crossFade: true,
      },
      autoplay: {
          delay: 2000,
      },
      speed:1000,
  });

  var slider2 = new Swiper ('.solution-swiper', {
      effect: "fade",
      fadeEffect: {
      crossFade: true
    },
    // 前後スライドボタンを表示
    navigation: {
      nextEl: ".next",
      prevEl: ".prev",
    },
    loop: true, // ループの有効化

  });

  var slider3 = new Swiper ('.about-img-auto-scroll', {
      speed: 8000,
      loopedSlides: 8,
      slidesPerView: 2,
      breakpoints:{
          438:{
              slidesPerView: 3,
          },
          833:{
              slidesPerView: 4,
          }
      },
      loop: true,
      allowTouchMove: false, // スワイプ操作をできないようにする
      autoplay: {
      delay: 0,　// 0にすることで流れ続けるようになる
      disableOnInteraction: false,
    },
  });

  var slider4 = new Swiper ('.pickup-swiper', {
      effect: "fade",
      fadeEffect: {
      crossFade: true
       },
      slidesPerView: '1', // スライド表示数
      loop: true,
      loopAdditionalSlides: 0,
      preventInteractionOnTransition: true,
      autoplay: {
          delay: 5000,
          disableOnInteraction: false,
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
          type: 'bullets',
          // 個別にクラスをつけることができる
          renderBullet: (index, className) => {
          return '<span class="' + className + '">0' + (Number(index) + 1) + '<svg class="circle" viewBox="0 0 48 48"><circle class="circle1" cx="24" cy="24" r="23" stroke="#0046DC" stroke-width="1" fill="none"/></svg></span>';
          },
      },
  });

  var slider5 = new Swiper ('.voice-auto-scroll', {
      speed: 8000,
      loopedSlides: 7,
      slidesPerView: 1,
      breakpoints:{
          438:{
              slidesPerView: 2,
          },
          833:{
              slidesPerView: 4,
          }
      },
      loop: true,
      allowTouchMove: false, // スワイプ操作をできないようにする
      autoplay: {
      delay: 0,　// 0にすることで流れ続けるようになる
      disableOnInteraction: false,
    },
  });
});
