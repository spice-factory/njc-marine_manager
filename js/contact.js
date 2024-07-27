// contact

ScrollTrigger.create({
  start: "top top",
  end: "bottom top",
  toggleClass: { className: "scrolled", targets: [".l-header"] },
});

document.querySelectorAll(".slideUp").forEach((el) => {
  gsap.fromTo(
    el,
    {
      y: "6rem",
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
