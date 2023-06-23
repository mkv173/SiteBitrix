<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
/** @global CMain $APPLICATION */
$APPLICATION->SetTitle("createx");
\CJSCore::Init();
?>

    Текст страницы
<div class="lazy_banner">

</div>

<script>
    function lazyBanner() {
        BX.ajax({
            url: '/ajax/lazy_banner.php/',
            method: 'POST',
            data: {
                id:2
            },
            onsuccess: function (result) {
                // debugger;
                document.body.innerHTML = result
            }

        })
    }
</script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>