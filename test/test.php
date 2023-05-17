<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
print_r($_POST);
echo '</pre>';
  $APPLICATION->IncludeComponent(
                    "createx:review.list",
                    " ",
                    Array(

                    )
                );
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>