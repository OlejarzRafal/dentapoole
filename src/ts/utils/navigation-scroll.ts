export const navigationScroll = () => {
  let lastScrollTop: number

  const header: HTMLElement | null =
    document.querySelector('[data-id="header"]')
  if (!header) return

  window.addEventListener('scroll', (): void => {
    const scrollTop: number =
      window.pageYOffset || document.documentElement.scrollTop

    if (scrollTop <= 10) {
      header.classList.remove('--hidden')
    } else {
      if (scrollTop > lastScrollTop) header.classList.add('--hidden')
      else header.classList.remove('--hidden')
    }

    lastScrollTop = scrollTop
  })
}
