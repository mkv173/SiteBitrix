<?php
use Createx\IblockHelper;
echo '<div class="container">';

$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    ".default",
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => $arResult['ELEMENT_ID'],
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "IBLOCK_ID" => IblockHelper::getIblockIdByCode('products'),
        "IBLOCK_TYPE" => "products",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(
            0 => "PRICE",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N",
        "COMPONENT_TEMPLATE" => "bootstrap_v4",
        "TEMPLATE_THEME" => "blue",
        "MEDIA_PROPERTY" => "",
        "SLIDER_PROPERTY" => ""
    ),
    false
);
?>
<div class="review-list">
<?php foreach ($arResult['REVIEWS'] as $review){ ?>

<div class="review-item">
        <h2><?= $review['UF_USER']?></h2>
        <p>Рейтинг <?= $review['UF_STARS']?></p>
        <p><?= $review['UF_CREATED_TIME']?></p>
        <p><?= $review['UF_TEXT']?></p>
</div>
<?php      } ?>
</div>

<form action="" method="POST" onsubmit="sendForm(event, this)" class="formSender">
<table>
<thead>
<tr>
<td>User</td>
<td>ReviewText</td>
<td>ProductStar</td>
</tr>
</thead>
<tbody>
<tr>
<td><input name="User" value=""></td>
<td><input name="ReviewText" value=""></td>
<td><input name="ProductStar" value="5" type="number" min="1" max="5"></td>

</tr>
</tbody>
</table>
    <input name="ProductId" value="<?=$arResult['ELEMENT_ID']?>" type="hidden">
<td><button name="FormReview" type="submit"  value="NewReview">Отправить</button></td>
</form>
</div>











