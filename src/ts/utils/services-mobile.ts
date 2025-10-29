import {screenResize} from './screen-resize';
export const servicesMobile = () => {
  const container = document.querySelector('[data-id="offer"] .hero__list');
  if (!container || window.innerWidth > 1200) return;
  container.addEventListener('click', (e) => { 
    const target = e.target as HTMLElement;
    if (!target.closest('.hero__item')) return;
    const item = target.closest('.hero__item') as HTMLElement;
    item.classList.toggle('--active');
    
  });
}
screenResize(250, servicesMobile);
