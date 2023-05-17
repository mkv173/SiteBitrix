<?php
/** @var array $arResult */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();

} ?>

<ul class="footer-menu">
    <?php
    foreach ($arResult as $key => $arMenu){
    $className = $arMenu['IS_PARENT'] ? 'menu__link' : 'footer-menu__text_small';
    if ($arMenu['IS_PARENT'] && $arMenu['ITEM_INDEX']){
    ?>
</ul>
<ul class="footer-menu">
    <?php
    } ?>
    <li>
        <a href="<?= $arMenu['LINK'] ?>" target="_blank" class="<?= $className ?>"><?= $arMenu['TEXT'] ?></a>
    </li>
    <?php
    } ?>
</ul>



