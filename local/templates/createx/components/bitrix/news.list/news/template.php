<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>


<?php
foreach ($arResult['ITEMS'] as $arItem) {
    $this->AddEditAction(
        $arItem['ID'],
        $arItem['EDIT_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
    );
    $this->AddDeleteAction(
        $arItem['ID'],
        $arItem['DELETE_LINK'],
        CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
    );
    ?>
    <div class="special-offers" style="background: <?= $arItem['PROPERTIES']['COLOR']['VALUE_XML_ID'] ?>"
         id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <a href="/catalog?sale70=y" target="_blank">
            <p class="special-offers__text"><?= $arItem['NAME'] ?> <span> <?= $arItem['PREVIEW_TEXT'] ?></span></p>
        </a>
    </div>
<?php
} ?>




