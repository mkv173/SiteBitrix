<?php

/** @var array $arResult */
use Createx\Reviews;

?>
<div class="product-row">
<?php foreach ($arResult['ITEMS'] as $arItem){?>
    <div class="product-item product-item_small">
        <div class="product-item__wrap">
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank">
            <img class="product-item__img" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
            </a>
            <?php
            Reviews::showStar($arResult['STARS'][$arItem['ID']], $arItem['DETAIL_PAGE_URL'], $arItem['REVIEW_PAGE_URL'])?>
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