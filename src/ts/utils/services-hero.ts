export const servicesHero = () => {
    const items = document.querySelectorAll<HTMLElement>('[data-id="services-offer"] [data-id="hero"] .hero__item--service')
    if (!items.length) return

    items.forEach((item) => {
        const content = item.querySelector<HTMLElement>('.hero__item-content')
        const title = item.querySelector<HTMLElement>('.hero__item-title')
        const body = item.querySelector<HTMLElement>('.hero__item-body')
        const button = item.querySelector<HTMLElement>('.hero__item-link--desktop')
        if (!content || !title || !body) return

        const updateTransform = () => {
            if (window.innerWidth <= 991) {
                content.style.transform = 'translateY(0)'
                return
            }

            // Reset to see actual heights
            content.style.transform = 'translateY(0)'
            void content.offsetHeight

            // Get title height
            const titleHeight = title.offsetHeight
            const titleMarginBottom = parseInt(window.getComputedStyle(title).marginBottom) || 0

            // Get body height (title + excerpt)
            const bodyHeight = body.offsetHeight

            // Get button height if exists
            const buttonHeight = button ? button.offsetHeight : 0
            const buttonMarginTop = button ? parseInt(window.getComputedStyle(button).marginTop) || 0 : 0

            // Calculate what needs to be hidden: body height - title height + button + margins
            const excerptHeight = bodyHeight - titleHeight
            const translateY = excerptHeight + buttonHeight + buttonMarginTop + 18

            content.style.transform = `translateY(${translateY}px)`
        }

        updateTransform()
        window.addEventListener('resize', updateTransform)

        item.addEventListener('mouseenter', () => {
            if (window.innerWidth > 991) {
                content.style.transform = 'translateY(0)'
            }
        })

        item.addEventListener('mouseleave', () => {
            if (window.innerWidth > 991) {
                updateTransform()
            }
        })
    })
}
