<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<footer>
    <div class="footer">
        <div class="container">
            <div class="footer__box">
                <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"footer_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "podmenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "bottom",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "footer_menu"
	),
	false
);?>

                <ul class="footer-menu">
                    <li>
                        <a href="#" target="_blank" class="menu__link">Get in touch</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="footer-menu__text_small"><span>Call: </span><?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => "/include/bottom_phone.php"
                                ),
                                false
                            );?></a>
                    </li>
                    <li>
                        <a href="#" target="_blank" class="footer-menu__text_small"><span>Email: </span><?php $APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                ".default",
                                array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "COMPONENT_TEMPLATE" => ".default",
                                    "PATH" => "/include/bottom_email.php"
                                ),
                                false
                            );?></a>
                    </li>
                    <li class="socilas">
                        <a href="#" target="_blank" class="menu__link"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/f.png"></a>
                        <a href="#" target="_blank" class="menu__link"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/i.png"></a>
                        <a href="#" target="_blank" class="menu__link"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/t.png"></a>
                        <a href="#" target="_blank" class="menu__link"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/y.png"></a>
                        <a href="#" target="_blank" class="menu__link"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/r.png"></a>
                    </li>
                </ul>
                <ul class="footer-menu">
                    <li>
                        <a href="#" target="_blank" class="menu__link">Download our app</a>
                    </li>
                    <li class="mobile-shopping__application">
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/app-store.png" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/google-play.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copyright__box">
                    <a href="#" target="_blank" class="copyright__text">© All rights reserved. Made with <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icons/Volume/heart.png">by Createx Studio </a>
                    <a href="#" target="_blank" class="copyright__text">Go to top</a>
                </div>

            </div>


        </div>


    </div>

</footer>

</body>
