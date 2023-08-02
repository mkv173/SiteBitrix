<?php

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */

foreach ($arResult as $item){
    $idQuery = http_build_query(['ID' => $item['UF_PRODUCT']]);
}


?>
    <div class="main-bar__toolbar children-gradient-divider">
        <div class="main-bar__wishlist">
            <a href="/catalog?<?=$idQuery?>" target="_blank">
                <i class="fa fa-heart-o" aria-hidden="true"></i></a>
            <span><?=$arResult['LIKES']?></span>
        </div>
        <div class="main-bar__wishlist">
            <a href="#" target="_blank">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            <span>4</span>
        </div>
    </div>







