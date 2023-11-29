/**
 * 文字の表示と非表示
 */
function openWords() {
    const texts = document.querySelectorAll('.book-content');

    texts.forEach(text => {
        const words = text.textContent;
        let subWords = words.substring(0, 30) + '.....';

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
openWords();

