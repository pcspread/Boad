/**
 * 評価数の表示設定
 */
function rateStar() {
    const star1 = document.querySelector('.edit-item__star-image.image1');
    const star2 = document.querySelector('.edit-item__star-image.image2');
    const star3 = document.querySelector('.edit-item__star-image.image3');
    const star4 = document.querySelector('.edit-item__star-image.image4');
    const star5 = document.querySelector('.edit-item__star-image.image5');

    const radio1 = document.querySelector('.edit-item__star.star1');
    const radio2 = document.querySelector('.edit-item__star.star2');
    const radio3 = document.querySelector('.edit-item__star.star3');
    const radio4 = document.querySelector('.edit-item__star.star4');
    const radio5 = document.querySelector('.edit-item__star.star5');

    /* ============================================================
    ボタンをクリックした時の処理
    ============================================================ */
    radio1.addEventListener('input', function () {
        if (radio1.checked) {
            star1.style.color = "#FFFF55";
            star2.style.color = "";
            star3.style.color = "";
            star4.style.color = "";
            star5.style.color = "";
        }
    });

    radio2.addEventListener('input', function () {
        if (radio2.checked) {
            star1.style.color = "#FFFF55";
            star2.style.color = "#FFFF55";
            star3.style.color = "";
            star4.style.color = "";
            star5.style.color = "";
        }
    });

    radio3.addEventListener('input', function () {
        if (radio3.checked) {
            star1.style.color = "#FFFF55";
            star2.style.color = "#FFFF55";
            star3.style.color = "#FFFF55";
            star4.style.color = "";
            star5.style.color = "";
        }
    });
    radio4.addEventListener('input', function () {
        if (radio4.checked) {
            star1.style.color = "#FFFF55";
            star2.style.color = "#FFFF55";
            star3.style.color = "#FFFF55";
            star4.style.color = "#FFFF55";
            star5.style.color = "";
        }
    });
    radio5.addEventListener('input', function () {
        if (radio5.checked) {
            star1.style.color = "#FFFF55";
            star2.style.color = "#FFFF55";
            star3.style.color = "#FFFF55";
            star4.style.color = "#FFFF55";
            star5.style.color = "#FFFF55";
        }
    });

    /* ============================================================
    ラジオボタンが選択されている時の処理
    ============================================================ */
    if (radio1.checked) {
        star1.style.color = "#FFFF55";
        star2.style.color = "";
        star3.style.color = "";
        star4.style.color = "";
        star5.style.color = "";
    }
    if (radio2.checked) {
        star1.style.color = "#FFFF55";
        star2.style.color = "#FFFF55";
        star3.style.color = "";
        star4.style.color = "";
        star5.style.color = "";
    }
    if (radio3.checked) {
        star1.style.color = "#FFFF55";
        star2.style.color = "#FFFF55";
        star3.style.color = "#FFFF55";
        star4.style.color = "";
        star5.style.color = "";
    }
    if (radio4.checked) {
        star1.style.color = "#FFFF55";
        star2.style.color = "#FFFF55";
        star3.style.color = "#FFFF55";
        star4.style.color = "#FFFF55";
        star5.style.color = "";
    }
    if (radio5.checked) {
        star1.style.color = "#FFFF55";
        star2.style.color = "#FFFF55";
        star3.style.color = "#FFFF55";
        star4.style.color = "#FFFF55";
        star5.style.color = "#FFFF55";
    }
}
rateStar();

/**
 * 削除ボタンを押した時の処理
 */
function confirmDel() {
    if (window.confirm('削除してもよろしいですか？')) {
        return true;
    } else {
        return false;
    }
}