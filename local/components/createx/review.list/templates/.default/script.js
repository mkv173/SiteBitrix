function sendForm(event, form) {
    event.preventDefault();
    let data = {
        user: form.elements.User.value,
        stars: form.elements.ProductStar.value,
        text: form.elements.ReviewText.value,
        product_id: form.elements.ProductId.value,

    }
    let request = BX.ajax.runComponentAction('createx:review.list', 'add', {
        mode: 'class',
        data: data,
    });

    request.then(function (response) {
        let reviewList = document.querySelector('.review-list');
        reviewList.innerHTML += response.data;
    });
    request.catch((response) => {
        alert('Ошибка')

    });
}

function deleteReview(reviewId, button) {
    let data = {
        reviewId: reviewId,
    }
    let request = BX.ajax.runComponentAction('createx:review.list', 'delete', {
        mode: 'class',
        data: data,
    });
    request.then(function (response) {
        reviewDiv = button.closest('.review-item');

        reviewDiv.remove();
        console.log(reviewDiv);
    });

}