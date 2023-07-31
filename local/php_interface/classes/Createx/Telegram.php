<?php

namespace Createx;

class Telegram
{
    public static function answerCallbackQuery($callbackQueryId, $text)
    {
        return self::request(
            'answerCallbackQuery',
            [
                'callback_query_id' => $callbackQueryId,
                'text'=> $text
            ]
        );

    }
    public static function setWebhook($url)
    {
        return self::request(
            'setWebhook',
            [
                'url' => $url
            ]
        );
    }
    public static function sendMessage($chatId, $text,$replyMarkup = '')
    {
        return self::request(
            'sendMessage',
            [
                'chat_id' => $chatId,
                'text' => $text,
                'reply_markup'=> $replyMarkup

            ]
        );
    }

    public static function editMessageText($chatId,$messageId,$text,$replyMarkup = '',$parseMode = 'html')
    {
        return self::request(
            'editMessageText',
            [
                'chat_id' => $chatId,
                'message_id' => $messageId,
                'text' => $text,
                'reply_markup'=> $replyMarkup,
                'parse_mode'=> $parseMode,

            ]
        );
    }

    public static function deleteMessage($chatId, $messageId)
    {
        return self::request(
            'deleteMessage',
            [
                'chat_id' => $chatId,
                'message_id' => $messageId
            ]
        );
    }

    public static function getUpdates()
    {
        return self::request('getUpdates', '');
    }

    public static function request($methodName, $arParams)
    {
        $httpClient = new \Bitrix\Main\Web\HttpClient();
        $resultJson = $httpClient->post(
            "https://api.telegram.org/bot6366568408:AAHVwppTh4CbCDvpT_eDORFMIwylLb_h6Eo/$methodName",
            $arParams
        );
        echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
        print_r($arParams);
        echo '</pre>';
        return json_decode($resultJson, true);
    }
}