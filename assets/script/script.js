// init

const plus = document.querySelectorAll('.plus')
console.log(plus);

plus.forEach(function (event) {
    event.addEventListener('click', (ev) => {
        console.log(ev.target.parentNode.parentNode.lastChild.previousElementSibling);
        let ul = ev.target.parentNode.parentNode.lastChild.previousElementSibling
        ul.classList.toggle('d-block')
        ul.classList.toggle('d-none')
    })
})