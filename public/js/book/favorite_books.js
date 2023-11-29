/**
 * 内容を一部開閉式にする
 */
function wordsOpen() {
    const texts = document.querySelectorAll('.book-content');

    texts.forEach(text => {
        const words = text.textContent;
        const subWords = words.substring(0, 30) + '.....';

        if (text.textContent.length > 30) {
            text.textContent = subWords;

            text.addEventListener('mouseover', function () {
                text.textContent = words;
            });

            text.addEventListener('mouseleave', function () {
                text.textContent = subWords;
            });
        }
    });
}
wordsOpen();
