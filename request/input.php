<?php

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Createx\HighloadBlockHelper;

$fileName = __DIR__ . '/test.log';
//$errorFileName = __DIR__ . '/error.log';

$message = json_decode(file_get_contents('php://input'), true);

file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);
file_put_contents($fileName, print_r(date('d.m.Y H:i:s') . PHP_EOL, true), FILE_APPEND);
file_put_contents($fileName, print_r($message, true) . PHP_EOL, FILE_APPEND);
file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);


if ($message['callback_query']['data']) {
    \Bitrix\Main\Loader::includeModule('highloadblock');
    $strEntityDataClass = HighloadBlockHelper::getHlDataClassByName('ProductReview');

    $strEntityDataClass::delete($message['callback_query']['data']);
    \Createx\Telegram::answerCallbackQuery($message['callback_query']['id'], "Отзыв удалён");
    $buttons = [
        'remove_inline_keyboard' => true
    ];
    $buttons = json_encode($buttons);
    \Createx\Telegram::editMessageText(
        $message['callback_query']['from']['id'],
        $message['callback_query']['message']['message_id'],
        $message['callback_query']['message']['text']  . " ОТЗЫВ УДАЛЕН",
        $buttons);
}















