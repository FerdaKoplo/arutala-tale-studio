// const navbar = document.getElementById("navbar")

// window.addEventListener('scroll', () => {
//     if (window.scrollY >= 50) {
//         navbar.classList.add('backdrop-blur-xl' )
//     } else {
//         navbar.classList.remove('backdrop-blur-xl') 
//     }
// })



document.addEventListener("DOMContentLoaded", () => {
    const sections = ['Home', 'OC', 'VTUBER', 'TERMOFSERVICE', 'TEAM']
    sections.forEach(section => {
      const buttons = document.querySelectorAll(`a[href="#${section}"]`)
      const sectionElement = document.getElementById(section)
      
      if (buttons.length && sectionElement) {
        buttons.forEach(button => {
          button.addEventListener('click', (e) => {
            e.preventDefault()
            sectionElement.scrollIntoView({behavior: 'smooth'})
            
            const menuMobile = document.getElementsByName('menuMobile')[0]
            const bar = document.getElementsByName('mobile')[0]
            const close = document.getElementsByName('closeMenu')[0]
            
            menuMobile.classList.remove('opacity-100')
            menuMobile.classList.add('opacity-0', 'pointer-events-none')
            bar.classList.remove('hidden')
            close.classList.add('hidden')
          })
        })
      }
    })
  
    const menuMobile = document.getElementsByName('menuMobile')[0]
    const bar = document.getElementsByName('mobile')[0]
    const close = document.getElementsByName('closeMenu')[0]

    function toggleMenu(show) {
        if (show) {
          menuMobile.classList.add('opacity-100')
          menuMobile.classList.remove('opacity-0', 'pointer-events-none')
          bar.classList.add('hidden')
          close.classList.remove('hidden')
        } else {
          menuMobile.classList.remove('opacity-100')
          menuMobile.classList.add('opacity-0', 'pointer-events-none')
          bar.classList.remove('hidden')
          close.classList.add('hidden')
        }
      }

      bar.addEventListener('click', () => toggleMenu(true))
      close.addEventListener('click', () => toggleMenu(false))
})
