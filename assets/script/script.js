// init

const plus = document.querySelectorAll('.plus')

plus.forEach(function (event) {
    event.addEventListener('click', (ev) => {
        let ul = ev.target.parentNode.parentNode.lastChild.previousElementSibling
        ul.classList.toggle('d-block')
        ul.classList.toggle('d-none')
    })
})
