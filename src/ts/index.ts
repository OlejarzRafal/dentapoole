import '../scss/style.scss'
import 'swiper/css'
import { navigation } from './utils/navigation'
import { navigationScroll } from './utils/navigation-scroll'
import { transition } from './utils/transition'
import { animation } from './utils/animation'
import { reviews } from './utils/reviews'
import { services } from './utils/services'
import {servicesMobile} from './utils/services-mobile'
import Swiper, { Navigation, Pagination, Scrollbar, Mousewheel } from 'swiper'
Swiper.use([Navigation, Pagination, Scrollbar, Mousewheel])

transition()

document.addEventListener('DOMContentLoaded', () => {
  navigation()
  navigationScroll()
  animation()
  servicesMobile();
  reviews(Swiper)
  services(Swiper)
})

window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload()
  }
}

window.addEventListener('load', function () {
  setTimeout(function () {
    const preloader = document.querySelector('.preloader')
    if (preloader) {
      preloader.style.transition = 'opacity 0.3s'
      preloader.style.opacity = '0'
      setTimeout(function () {
        preloader.style.display = 'none'
      }, 200)
    }
  }, 10)
})