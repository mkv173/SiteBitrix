<?php
/** @var array $arResult */
foreach ($arResult['SECTIONS'] as $arItem) { ?>
    <div>
        <a href="#" target="_blank">
            <img src="<?= $arItem['PICTURE']['SRC'] ?>" alt="<?= $arItem['PICTURE']['ALT'] ?>">
            <p><?= $arItem['NAME'] ?></p>
        </a>
    </div>
    <?php
} ?>











