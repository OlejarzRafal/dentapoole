export const services = (Swiper: any) => {
  const container = document.querySelector('.services__slider')
  if (!container) return
  const swiper = new Swiper(container, {
    slidesPerView: 2.5,
    spaceBetween: 22,
    speed: 500,
    scrollbar: {
      el: '.services__slider .swiper-scrollbar',
      draggable: true,
    },
    mousewheel: {
      enable: true,
      eventsTarget: '.services',
      releaseOnEdges: true,
      sensitivity: 0.5,
      thresholdDelta: 14,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.2,
        spaceBetween: 20,
      },
      576: {
        slidesPerView: 1.8,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2.3,
        spaceBetween: 22,
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 22,
      },
      1200: {
        slidesPerView: 2.9,
        spaceBetween: 22,
      },
    },
    on: {
      slideChange: function () {
        setTimeout(function () {
          swiper.params.mousewheel.releaseOnEdges = false
        }, 500)
      },
      reachBeginning: function () {
        setTimeout(function () {
          swiper.params.mousewheel.releaseOnEdges = true
        }, 750)
      },
      reachEnd: function () {
        setTimeout(function () {
          swiper.params.mousewheel.releaseOnEdges = true
        }, 750)
      },
    },
  })
}
