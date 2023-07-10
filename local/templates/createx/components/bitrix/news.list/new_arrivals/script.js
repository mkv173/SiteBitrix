

function sendLike(element, productId, userId)
{
    let data = {
        productId: productId,
        userId: userId,
    }
    if (!userId){
    location = /auth/
}


    BX.ajax({
            url: '/local/templates/createx/components/bitrix/news.list/new_arrivals/ajax.php',
            method: 'POST',
            data: data,

            onsuccess: function (result) {
                element.classList = (result ? 'fa fa-heart' : 'fa fa-heart-o')
            }
        }
    )

}

