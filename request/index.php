<?

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Новая страница");

$httpClient = new \Bitrix\Main\Web\HttpClient();

$chatId = 1375889477;

//$result = \Createx\Telegram::setWebhook('https://test.1512315-cu01062.tw1.ru/request/input.php');
$result = \Createx\Telegram::request('getWebHookInfo', '');

echo '<pre style="background: #fff; border: 1px solid #ff0000; width: 100%; color:#000">';
print_r($result);
echo '</pre>';





require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>