export const reviews = (Swiper: any) => {
  const container = document.querySelector('.reviews__main')
  if (!container) return
  const swiper = new Swiper(container, {
    slidesPerView: 4,
    spaceBetween: 32,
    speed: 500,
    scrollbar: {
      el: '.reviews__main .swiper-scrollbar',
      draggable: true,
    },
    mousewheel: {
      enable: true,
      // eventsTarget: '.reviews',
      releaseOnEdges: true,
      // sensitivity: 0.5,
      // thresholdDelta: 14,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.3,
        spaceBetween: 24,
      },
      600: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      768: {
        slidesPerView: 2.5,
        spaceBetween: 32,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
    },
    // on: {
    //   slideChange: function () {
    //     setTimeout(function () {
    //       swiper.params.mousewheel.releaseOnEdges = false
    //     }, 500)
    //   },
    //   reachBeginning: function () {
    //     setTimeout(function () {
    //       swiper.params.mousewheel.releaseOnEdges = true
    //     }, 750)
    //   },
    //   reachEnd: function () {
    //     setTimeout(function () {
    //       swiper.params.mousewheel.releaseOnEdges = true
    //     }, 750)
    //   },
    // },
  })
}
