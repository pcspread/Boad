/**
 * 評価を★に変換する
 */
function convertRate() {
    const rate = document.querySelector('.main-rate__instance');
    const rateStr = rate.textContent;

    if (rate) {
        if (rateStr == 1) {
            rate.textContent = '★☆☆☆☆';
            rate.style.color = "#5555FF";
        }

        if (rateStr == 2) {
            rate.textContent = '★★☆☆☆';
            rate.style.color = '#5555FF';
        }

        if (rateStr == 3) {
            rate.textContent = '★★★☆☆';
            rate.style.color = '#5555FF';
        }

        if (rateStr == 4) {
            rate.textContent = '★★★★☆';
            rate.style.color = '#5555FF';
        }

        if (rateStr == 5) {
            rate.textContent = '★★★★★';
            rate.style.color = '#5555FF';
        }
    }

}
convertRate();

/**
 * 削除確認を行う
 */
function confirmDel() {
    if (window.confirm('削除してもよろしいですか？')) {
        return true;
    } else {
        return false;
    }
}