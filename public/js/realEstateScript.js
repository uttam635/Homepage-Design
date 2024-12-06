const navbarToggler = document.getElementById('navbarToggler');
const openIcon = navbarToggler.querySelector('.menu-icon');
const closeIcon = navbarToggler.querySelector('.btn-close');

navbarToggler.addEventListener('click', () => {
    const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
    if(isExpanded){
        openIcon.classList.add('d-none');
        closeIcon.classList.remove('d-none');
    } else {
        openIcon.classList.remove('d-none');
        closeIcon.classList.add('d-none');
    }
})

// back to top btn
let mybutton = document.getElementById('btn-back-to-top');

// scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollFunction()
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// click on the button, scroll to the top of the docoment
function topfunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}