<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="main-bar__menu">
<?php
 foreach ($arResult as $key => $arMenu){?>
     <li>
     <a href="<?= $arMenu['LINK']?>" target="_blank"><?= $arMenu['TEXT']?></a>
     </li>
<?php }?>
</ul>



