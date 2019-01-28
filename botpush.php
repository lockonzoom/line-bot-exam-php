<?php



require "vendor/autoload.php";

$access_token = 'U7jBtvsMjfHYhH6+tzUaNBbo6DwoSplWMGOjoerGIblQ3f7CiirlkK25AOmLg8+lk1X1d9CGtyPJ5iZLbudv/G5xN9CK/3TdPIlQmza6DXoGBUBi/Viogfnx+jeJg5E0v+fyTHTppU+KPio/BQjtKwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '87e79ae99e4321a4f522cc2ffff1d140';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







