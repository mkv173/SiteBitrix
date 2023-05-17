<?php

/** @var array $arResult */
//echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
//print_r($arResult);
//echo '</pre>';
?>
<div class="product-row">
<?php foreach ($arResult['ITEMS'] as $arItem){?>
    <div class="product-item product-item_small">
        <div class="product-item__wrap">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank">
            <img class="product-item__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
            </a>
            <div class="star-rating"><a href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank">
                <a href="<?=$arItem['REVIEW_PAGE_URL']?>" target="_blank" class="star-rating__wrap" >
                    <label class="star-rating__ico fa fa-star-o fa-lg" title="5 out of 5 stars"></label>
                    <label class="star-rating__ico fa fa-star-o fa-lg" title="4 out of 5 stars"></label>
                    <label class="star-rating__ico fa fa-star-o fa-lg" title="3 out of 5 stars"></label>
                    <label class="star-rating__ico fa fa-star-o fa-lg" title="2 out of 5 stars"></label>
                    <label class="star-rating__ico fa fa-star-o fa-lg" title="1 out of 5 stars"></label>
                </a>

            </div>
            <div class="star-rating__heart">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
            </div>
        </div>
        <a href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank">
        <p class="product-item__name"><?=$arItem['NAME']?></p>
        <p class="product-item__price"><?=$arItem['PROPERTIES']['PRICE']['VALUE']?></p>
        </a>

    </div>

<?php }?>
</div>
<script>var offset = new Date().getTimezoneOffset();
        console.log(offset)
</script>