export const heroSlider = (Swiper: any) => {
  const containers = document.querySelectorAll<HTMLElement>('[data-hero-slider]')
  if (!containers.length) return

  containers.forEach((container) => {
    if (container.dataset.heroSliderInitialized === 'true') return

    const slides = container.querySelectorAll('.swiper-slide')
    if (!slides.length) return

    const prevEl = container.querySelector<HTMLButtonElement>('.hero-modal__nav--prev') || undefined
    const nextEl = container.querySelector<HTMLButtonElement>('.hero-modal__nav--next') || undefined
    const paginationEl = container.querySelector<HTMLDivElement>('.hero-modal__pagination') || undefined

    container.dataset.heroSliderInitialized = 'true'

    new Swiper(container, {
      slidesPerView: 1,
      loop: slides.length > 1,
      speed: 600,
      autoplay: {
        delay: 15000,
        disableOnInteraction: false,
      },
      navigation: prevEl && nextEl
        ? {
          prevEl,
          nextEl,
        }
        : undefined,
      pagination: paginationEl
        ? {
          el: paginationEl,
          clickable: true,
        }
        : undefined,
    })
  })
}


