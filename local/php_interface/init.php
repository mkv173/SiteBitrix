<?php
spl_autoload_register(function($sClassName)
{
    $sClassFile = __DIR__.'/classes';
//    Createx\IblockHelper
//    /home/bitrix/www/local/php_interface/classes/Createx/IblockHelper.php

    if ( file_exists($sClassFile.'/'.str_replace('\\', '/', $sClassName).'.php') )
    {
        require_once($sClassFile.'/'.str_replace('\\', '/', $sClassName).'.php');
        return;
    }

    $arClass = explode('\\', strtolower($sClassName));
    foreach($arClass as $sPath )
    {
        $sClassFile .= '/'.ucfirst($sPath);
    }
    $sClassFile .= '.php';
    if (file_exists($sClassFile))
    {
        require_once($sClassFile);
    }
});



