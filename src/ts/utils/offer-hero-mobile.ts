export const offerHeroMobile = () => {
  const heroContainer = document.querySelector<HTMLElement>('[data-id="offer"] [data-id="hero"] .hero__container')
  const heroContent = document.querySelector<HTMLElement>('[data-id="offer"] [data-id="hero"] .hero__content')
  const heroImage = document.querySelector<HTMLElement>('[data-id="offer"] [data-id="hero"] .hero__image')
  
  if (!heroContainer || !heroContent || !heroImage) return

  let originalParent: HTMLElement | null = null
  let originalNextSibling: Node | null = null
  let isMoved = false

  const moveImage = () => {
    if (window.innerWidth < 768) {
      if (isMoved) return

      // Find h1 in hero__content
      const h1 = heroContent.querySelector('h1')
      if (!h1) return

      // Find the next element sibling after h1 (skip text nodes and other h1s)
      let nextElement: HTMLElement | null = null
      let current: Node | null = h1.nextSibling
      
      while (current) {
        if (current.nodeType === 1) {
          const element = current as HTMLElement
          if (element.tagName !== 'H1' && element !== heroImage) {
            nextElement = element
            break
          }
        }
        current = current.nextSibling
      }

      // Store original position
      originalParent = heroImage.parentElement
      originalNextSibling = heroImage.nextSibling

      // Move image after h1
      if (nextElement) {
        heroContent.insertBefore(heroImage, nextElement)
      } else {
        // If no next element, insert after h1
        h1.parentNode?.insertBefore(heroImage, h1.nextSibling)
      }

      isMoved = true
    } else {
      if (!isMoved) return

      // Restore original position
      if (originalParent && originalNextSibling) {
        originalParent.insertBefore(heroImage, originalNextSibling)
      } else if (originalParent) {
        originalParent.appendChild(heroImage)
      }

      isMoved = false
      originalParent = null
      originalNextSibling = null
    }
  }

  moveImage()
  window.addEventListener('resize', moveImage)
}
