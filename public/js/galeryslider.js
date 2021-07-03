const galery = document.getElementById('galery')
const img = ['car3.png', 'car1.png', 'car4.jpg']
    const fragment = document.createDocumentFragment()
    for (const image of img) {
        const images = document.getElementById('img')
        images.classList.add('galery__img')
        images.addEventListener('animationstart', (e) => {
            e.target.style.zIndex = 2
            if (e.target.nextElementSibling) {
                e.target.nextElementSibling.style.zIndex = 1
            } else {
                galery.firstElementChild.style.zIndex = 1
            }
        });
        images.addEventListener('animationend', (e) => {
            e.target.removeAttribute('style')
            e.target.classList.remove('galery__img--animate')
            if (e.target.nextElementSibling) {
                e.target.nextElementSibling.classList.add('galery__img--animate')
            } else {
                galery.firstElementChild.classList.add('galery__img--animate')
            }
        });
        fragment.appendChild(images)
    }
    galery.appendChild(fragment)
    galery.firstElementChild.classList.add('galery__img--animate')
