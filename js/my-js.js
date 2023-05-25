const containerDiv = document.querySelector('.top_container')
const navUl = document.querySelector('.navbar-nav')

if (window.location.pathname != '/Chochev/Kinder/') {
    containerDiv.classList.add('sub_pages')
    containerDiv.style.background = '#082465'
    containerDiv.style.height = '100px'
    navUl.querySelectorAll('a').forEach(a => { a.style.color = 'white' })
}
