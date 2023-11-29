/**
 * カードをホバーした際の設定
 */
function hoverCards() {
    const buttons = document.querySelectorAll('.book-button');

    buttons.forEach(button => {
        button.addEventListener('mouseover', function () {
            button.parentElement.style.backgroundColor = '#60EEAA';
            button.parentElement.firstElementChild.style.color = '#FFF';
        });

        button.addEventListener('mouseleave', function () {
            button.parentElement.style.backgroundColor = '#FFF';
            button.parentElement.firstElementChild.style.color = '#000';
        });
    });
}
hoverCards();