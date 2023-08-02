<?php

namespace Createx;

class Log
{
    public static function logEntry($message)
    {
        $fileName = $_SERVER["DOCUMENT_ROOT"] . '/upload/log/error.log';

        file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);
        file_put_contents($fileName, print_r(date('d.m.Y H:i:s') . PHP_EOL, true), FILE_APPEND);
        file_put_contents($fileName, print_r($message, true) . PHP_EOL, FILE_APPEND);
        file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);

    }

}