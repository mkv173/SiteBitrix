<?php
/** @var array $arResult */

 ?>

<div class="banners">
<?php
foreach ($arResult['ITEMS'] as $key => $arItem) {?>
<div class="banner banner<?=($key + 1)?>" style="background-image: url('<?= $arItem['PREVIEW_PICTURE']['SRC']?>')">
    <p class="banner__text"><?= $arItem['NAME']?></p>
    <p class="banner__heading"><?= $arItem['PREVIEW_TEXT']?></p>
    <?php if ($arItem['PROPERTIES']['SHOW_FORM']['VALUE_XML_ID'] == 'Y') {?>
    <p class="label">Email</p>
        <div class="email">
            <input class="label-text" type="text" placeholder="Your working email" name="mail" required>
            <input class="subscribe-button" type="submit" value="Subscribe">
        </div>
        <p>*Sign up to be the first to hear about exclusive deals, special<br> offers and upcoming collections.</p>
   <?php }
    if ($arItem['PROPERTIES']['BUTTON_TEXT']['VALUE']) {?>
    <a href="<?= $arItem['PROPERTIES']['BUTTON_LINK']['VALUE']?>" target="_blank">
    <button class="button button_s_14"><?= $arItem['PROPERTIES']['BUTTON_TEXT']['VALUE']?></button>
    </a>
    <?php }
    if ($arItem['PROPERTIES']['COUNTDOWN']['VALUE']) {?>
        <div class="countdown">
        <p class="banner__text">Limited time offer</p>
        <div class="timer">
        <div class="days">
        <p class="time"><?=$arResult['ITEMS'][$key]['COUNTDOWN']['DAYS']?></p>
        <p class="data">Days</p>
        </div>
        <div class="days">
        <p class="time"><?=$arResult['ITEMS'][$key]['COUNTDOWN']['HOURS']?></p>
        <p class="data">Hours</p>
        </div>
        <div class="days">
        <p class="time"><?=$arResult['ITEMS'][$key]['COUNTDOWN']['MINS']?></p>
        <p class="data">Mins</p>
        </div>
        <div class="days">
        <p class="time"><?=$arResult['ITEMS'][$key]['COUNTDOWN']['SEC']?></p>
        <p class="data">Sec</p>
        </div>
        </div>
        </div>
   <?php }?>
</div>
    <?php } ?>
</div>


