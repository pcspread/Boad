/**
 * 文字の表示と非表示
 */
function openWords() {
    const sentences = document.querySelectorAll('.book_content');

    sentences.forEach(sentence => {
        const words = sentence.textContent;
        const subWords = words.subString(0, 30) + '...';

        if (words.length > 30) {
            this.textContent = subWords;
        }

        sentence.addEventListener('mouseover', function () {
            this.textContent = words;
        });

        sentence.addEventListener('mouseleave', function () {
            this.textContent = subWords;
        });
    });
}
openWords();