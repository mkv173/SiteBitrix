<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true); ?>


<form class="search-form main-bar__search" action="<?= $arResult["FORM_ACTION"] ?>">
    <input class="search-form__input" type="text" name="q" placeholder="Search for products...">
    <button class="search-form__button" type="submit" name="s"
            value="<?= GetMessage("BSF_T_SEARCH_BUTTON"); ?>"></button>
</form>