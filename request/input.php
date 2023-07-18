<?php

$fileName = __DIR__ . '/test.log';

$message = json_decode(file_get_contents('php://input'), true);
file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);
file_put_contents($fileName, print_r(date('d.m.Y H:i:s') . PHP_EOL, true), FILE_APPEND);
file_put_contents($fileName, print_r($message, true) . PHP_EOL, FILE_APPEND);
file_put_contents($fileName, print_r('---------------------------' . PHP_EOL, true), FILE_APPEND);




