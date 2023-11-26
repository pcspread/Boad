/**
 * バーガーメニューの開閉
 */
function burger() {
    const nav = document.querySelector('.nav-list');
    const burger = document.querySelector('.burger');
    const mask = document.querySelector('.mask');
    const lines = document.querySelectorAll('.burger-line');

    burger.addEventListener('click', function () {
        nav.classList.toggle('toggle');
        burger.classList.toggle('position');
        mask.classList.toggle('toggle');
        lines.forEach(line => {
            line.classList.toggle('rotate');
        });
    });
}
burger();

/**
 * 上方へ移動するボタンの出現と消失
 */
function upper() {
    const upper = document.querySelector('.upper');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            upper.style.display = 'block';
        } else {
            upper.style.display = 'none';
        }
    });
}
upper();

/**
 * コメントの非表示
 */
function noneComment() {
    const comment = document.querySelector('.comment');

    setTimeout(function () {
        comment.style.display = 'none';
    }, 3500);
}
noneComment();