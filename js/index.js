const handleNavBtn = (name) => {
    const menu = document.getElementsByClassName(name)[0]
    menu.style.display = menu.style.display === '' ? 'block' : ''
}

document.getElementsByClassName('header__button')[0]
.addEventListener('click', () => handleNavBtn('navigation__list'))  

document.getElementsByClassName('navigation__text')[0]
.addEventListener('click', () => handleNavBtn('navigation__services-list'))  