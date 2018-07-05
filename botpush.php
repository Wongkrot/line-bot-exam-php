<?php



require "vendor/autoload.php";

//$access_token = '3ALKAbKFoGuJyJnoDdn0HeyfbxLFtEXBKiC0lFeoNl/XbL4WhoCZzefp2n7UDuXaCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRUaKehDkiCr5p5CakHrPX+gauOGX/R5bB2e5yi7xjnHDAdB04t89/1O/w1cDnyilFU=';
$access_token = '5ZXZrSS8ZkEDGBilHGY2vKyWARc0Yx6O9zOZ/iN24MH39flQZLWt7gvvOY10/LMD3rppnVJBza1RyQIMXJ2vsoPh8i+L2nyIG8y0tlqR/asJiq0gfm1W5wh93re+XESxhwpUoa5q3iZuokzvYqNIcgdB04t89/1O/w1cDnyilFU=';

//$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';
$channelSecret = '33a71e2a76f6b89b4b31e61f02d93f97';

//$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';
$pushID = '1591950917';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







