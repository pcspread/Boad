/**
 * バーガーメニューの開閉
 */
function burger() {
    const nav = document.querySelector('.header-nav');
    const burger = document.querySelector('.burger');
    const burgerLine = document.querySelectorAll('.burger-line');

    burger.addEventListener('click', function () {
        nav.classList.toggle('toggle');
    });
}
burger();