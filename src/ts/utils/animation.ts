export const animation = () => {
  const opacityMoveItems: NodeListOf<HTMLElement> = document.querySelectorAll(
    '[data-opacity-move]'
  )
  const opacityItems: NodeListOf<HTMLElement> =
    document.querySelectorAll('[data-opacity]')
  const itemsAnimation = (
    array: NodeListOf<HTMLElement>,
    threshold: number
  ): void => {
    if (array.length) {
      const observerText = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('animate')
              observer.unobserve(entry.target)
            }
          })
        },
        {
          threshold: threshold,
        }
      )
      array.forEach((item: HTMLElement) => observerText.observe(item))
    }
  }
  itemsAnimation(opacityMoveItems, 0.3)
  itemsAnimation(opacityItems, 0.3)
}
