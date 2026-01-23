let swiperInstance: any = null

const equalizeSlideHeights = () => {
  if (window.innerWidth <= 991) return

  const slides = document.querySelectorAll<HTMLElement>('.services__slider .swiper-slide')
  if (!slides.length) return

  // Reset heights and transforms
  slides.forEach((slide) => {
    slide.style.height = 'auto'
    const content = slide.querySelector<HTMLElement>('.services-slide__content')
    if (content) {
      content.style.transform = 'translateY(0)'
    }
  })

  // Find max height (including button)
  let maxHeight = 0
  slides.forEach((slide) => {
    const content = slide.querySelector<HTMLElement>('.services-slide__content')
    const button = slide.querySelector<HTMLElement>('.services-slide__link--desktop')
    if (content) {
      // Temporarily show button to measure full height
      if (button) {
        button.style.opacity = '1'
        button.style.pointerEvents = 'auto'
      }
      const height = content.offsetHeight
      if (height > maxHeight) {
        maxHeight = height
      }
      // Hide button again
      if (button) {
        button.style.opacity = '0'
        button.style.pointerEvents = 'none'
      }
    }
  })

  // Set all slides to max height and calculate button offset
  if (maxHeight > 0) {
    slides.forEach((slide) => {
      const content = slide.querySelector<HTMLElement>('.services-slide__content')
      const button = slide.querySelector<HTMLElement>('.services-slide__link--desktop')
      if (content) {
        content.style.minHeight = `${maxHeight}px`

        // Calculate button height for translateY
        if (button) {
          // Temporarily show button to measure
          button.style.opacity = '1'
          button.style.pointerEvents = 'auto'
          const buttonHeight = button.offsetHeight
          const buttonMarginTop = parseInt(window.getComputedStyle(button).marginTop) || 0
          const totalButtonHeight = buttonHeight + buttonMarginTop

          // Hide button and set transform
          button.style.opacity = '0'
          button.style.pointerEvents = 'none'
          content.style.transform = `translateY(${totalButtonHeight}px)`
        }
      }
    })
  }
}

export const services = (Swiper: any) => {
  const container = document.querySelector('.services__slider')
  if (!container) return

  const initSwiper = () => {
    if (window.innerWidth <= 991) {
      if (swiperInstance) {
        swiperInstance.destroy(true, true)
        swiperInstance = null
      }
      return
    }

    if (swiperInstance) return

    swiperInstance = new Swiper(container, {
      slidesPerView: 2.5,
      spaceBetween: 22,
      speed: 500,
      scrollbar: {
        el: '.services__slider .swiper-scrollbar',
        draggable: true,
      },
      mousewheel: {
        enable: true,
        eventsTarget: '.services__inner',
        releaseOnEdges: true,
        sensitivity: 0.5,
        thresholdDelta: 14,
      },
      breakpoints: {
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
        init: function () {
          setTimeout(equalizeSlideHeights, 100)
        },
        slideChange: function () {
          setTimeout(function () {
            swiperInstance.params.mousewheel.releaseOnEdges = false
          }, 500)
        },
        reachBeginning: function () {
          setTimeout(function () {
            swiperInstance.params.mousewheel.releaseOnEdges = true
          }, 750)
        },
        reachEnd: function () {
          setTimeout(function () {
            swiperInstance.params.mousewheel.releaseOnEdges = true
          }, 750)
        },
      },
    })

    // Equalize heights after initialization
    setTimeout(() => {
      equalizeSlideHeights()
      setupHoverEffects()
    }, 100)
  }

  const setupHoverEffects = () => {
    if (window.innerWidth <= 991) return

    const slides = document.querySelectorAll<HTMLElement>('.services__slider .swiper-slide')
    slides.forEach((slide) => {
      const content = slide.querySelector<HTMLElement>('.services-slide__content')
      const button = slide.querySelector<HTMLElement>('.services-slide__link--desktop')

      if (!content || !button) return

      slide.addEventListener('mouseenter', () => {
        content.style.transform = 'translateY(0)'
        button.style.opacity = '1'
        button.style.pointerEvents = 'auto'
      })

      slide.addEventListener('mouseleave', () => {
        const buttonHeight = button.offsetHeight
        const buttonMarginTop = parseInt(window.getComputedStyle(button).marginTop) || 0
        const totalButtonHeight = buttonHeight + buttonMarginTop
        content.style.transform = `translateY(${totalButtonHeight}px)`
        button.style.opacity = '0'
        button.style.pointerEvents = 'none'
      })
    })
  }

  initSwiper()

  window.addEventListener('resize', () => {
    if (window.innerWidth <= 991 && swiperInstance) {
      swiperInstance.destroy(true, true)
      swiperInstance = null
    } else if (window.innerWidth > 991 && !swiperInstance) {
      initSwiper()
    } else if (window.innerWidth > 991) {
      setTimeout(() => {
        equalizeSlideHeights()
        setupHoverEffects()
      }, 100)
    }
  })
}
