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

/**
 * 検索機能
 */
function searchWord() {
    const input = document.querySelector('.books-search__input');
    const cards = document.querySelectorAll('.books-item');
    const none = document.querySelector('.books-item__none');

    input.addEventListener('change', function () {
        cards.forEach(card => {
            if (!card.children[0].textContent.includes(input.value)) {
                if (!card.children[1].textContent.includes(input.value)) {
                    if (!card.children[2].textContent.includes(input.value)) {
                        if (!card.children[3].textContent.includes(input.value)) {
                            card.remove();
                        }
                    }
                }
            }
        });

        // 図書情報が無い場合
        const items = document.querySelectorAll('.books-item');
        if (items.length === 0) {
            none.textContent = '図書情報がございません';
        }
    });
}
searchWord();