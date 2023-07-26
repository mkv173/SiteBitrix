<?php

/** @var array $arResult */

use Createx\Reviews;

?>
<div class="sale">
    <div class="container">
        <p class="heading ">Sale up to 70%</p>
        <div class="product-card__row">
            <?php
            foreach ($arResult['ITEMS'] as $arItem) { ?>
                <div class="product-item">
                    <div class="product-item__wrap product-item__wrap_big">
                        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" target="_blank">
                            <img class="product-item__img product-item__img--big"
                                 src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                                 alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>">
                        </a>
                        <?php
                        Reviews::showStar(
                            $arResult['STARS'][$arItem['ID']],
                            $arItem['DETAIL_PAGE_URL'],
                            $arItem['REVIEW_PAGE_URL']
                        ) ?>
                        <div class="star-rating__heart">
                            <i class="fa <?= ($arResult['LIKES'][$arItem['ID']]) ? 'fa-heart' : 'fa-heart-o' ?>"
                               aria-hidden="true"
                               onclick="sendLike(this, <?= $arItem['ID'] ?>, <?= $USER->GetID() ?>)"></i>
                        </div>
                    </div>
                    <div class="product-item__info">
                        <p class="product-item__name"><?= $arItem['NAME'] ?></p>
                        <p class="product-item__price"><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?></p>
                    </div>
                    <div class="product-item__info product-item__info_active">
                        <div class="product-selection">
                            <div class="size">
                                <?php
                                foreach ($arItem['PROPERTIES']['SIZE']['VALUE'] as $size) {
                                    ?>
                                    <button class="size__button"><?= $size ?></button>

                                    <?php
                                } ?>
                            </div>
                            <div class="color">
                                <?php
                                foreach ($arItem['PROPERTIES']['COLOR']['VALUE'] as $key => $color) {
                                    ?>
                                    <button class="color__button <?= ($key == 0) ? 'color__button_active' : '' ?>"
                                            style="background-color: <?= $color ?>"></button>
                                    <?php
                                } ?>
                            </div>
                        </div>
                        <div class="">
                            <button class="button button_s_14 button_solid button_add">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart
                            </button>
                        </div>
                    </div>
                </div>

                <?php
            } ?>

        </div>
        <div class="btn">
            <button class="button">See all sale products</button>
        </div>
    </div>
</div>
