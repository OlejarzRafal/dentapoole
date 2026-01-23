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
      const li = trigger.closest('li')
      if (li) li.classList.remove('--has-active')
    })
  })

  nav.addEventListener('click', (e) => {
    const target = e.target as HTMLElement;
    const trigger = target.closest('.menu-mobile__arrow.--menu-trigger') as HTMLElement;
    const nestedTrigger = target.closest('.menu-sub-item__trigger') as HTMLElement;
    
    if (trigger) {
      e.preventDefault();
      e.stopPropagation();
      
      const active = document.querySelector('.menu-mobile__arrow.--menu-trigger.--active')
      if (active && active !== trigger) {
        active.classList.remove('--active')
        const activeLi = active.closest('li')
        if (activeLi) activeLi.classList.remove('--has-active')
      }
      
      trigger.classList.toggle('--active')
      const li = trigger.closest('li')
      if (li) {
        if (trigger.classList.contains('--active')) {
          li.classList.add('--has-active')
        } else {
          li.classList.remove('--has-active')
        }
      }
    }
    
    if (nestedTrigger) {
      e.preventDefault();
      e.stopPropagation();
      
      const menuSubItem = nestedTrigger.closest('.menu-sub-item') as HTMLElement;
      if (menuSubItem) {
        menuSubItem.classList.toggle('--active');
      }
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
        const li = trigger.closest('li')
        if (li) li.classList.remove('--has-active')
      })
    }
  })
}
