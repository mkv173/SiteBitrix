
function sendForm(event, form) {
    // alert(1);
    event.preventDefault();
    let data = {
        user: form.elements.User.value,
        stars: form.elements.ProductStar.value,
        text: form.elements.ReviewText.value,
        product_id: form.elements.ProductId.value,

    }

    // console.log(data.keys())
    // debugger;
    BX.ajax({
        url: '/local/components/createx/review.list/ajax.php',
        method: 'POST',
        data: data,

        onsuccess: function (result) {
            let reviewList = document.querySelector('.review-list');
            reviewList.innerHTML += result;
            // debugger;
            // document.body.innerHTML = result
        }

    })
}