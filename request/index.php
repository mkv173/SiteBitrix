<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Новая страница");

$httpClient = new \Bitrix\Main\Web\HttpClient();

$chatId = 1375889477;

$buttons = [
    'inline_keyboard' => [
        [
            [
                'text' => 123,
                'callback_data' => '123'
            ],


        ],
        [
            [
                'text' => 123,
                'callback_data' => '123'
            ]
        ]
    ]
];
$buttons = json_encode($buttons);
$result = \Createx\Telegram::sendMessage(
    1375889477,
    "На ваш товар  http://bitrix.vm/product_review/index.php?ID={$_POST['product_id']} покупателем {$_POST['user']} оставлен плохой отзыв",
    $buttons
);
echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
print_r($result);
echo '</pre>';





require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>