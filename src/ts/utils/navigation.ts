export const navigation = () => {
  const burger: HTMLDivElement | null = document.querySelector('.burger')
  const nav: HTMLDivElement | null = document.querySelector('#menu-mobile')
  const triggers: NodeListOf<HTMLDivElement> | null =
    document.querySelectorAll('.--menu-trigger')
  const html = document.documentElement
  const body = document.body

  if (!burger || !nav) return

  burger.addEventListener('click', () => {
    nav.classList.toggle('--active')

    if (nav.classList.contains('--active')) {
      burger.classList.add('open')
      html.style.overflowY = 'hidden'
      body.classList.add('open')
      return
    }
    burger.classList.remove('open')
    html.style.overflowY = 'auto'
    body.classList.remove('open')
    triggers.forEach((trigger) => {
      trigger.classList.remove('--active')
    })
  })

  nav.addEventListener('click', (e) => {
    const target = e.target as HTMLElement;
    
    if (target.classList.contains('--menu-trigger')) {
      const active = document.querySelector('.--menu-trigger.--active')
      if (active) active.classList.remove('--active')
      target.classList.add('--active')
    }

    const url = target.getAttribute('href');
    if (!url) return
    const currentPath = window.location.pathname
    const targetPath = new URL(url).pathname
    if (currentPath.includes(targetPath)) {
      nav.classList.remove('--active')
      burger.classList.remove('open')
      html.style.overflowY = 'auto'
      body.classList.remove('open')
      triggers.forEach((trigger) => {
        trigger.classList.remove('--active')
      })
    }
  })
}
