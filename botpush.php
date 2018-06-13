<?php



require "vendor/autoload.php";

$access_token = 'qkKOoluNm+dSDq0hfd5gx2fW8ik3+oB24c6tpJd55Myww2NncmhXS/8W5JbT/Af9K1dm/y/DdLdLm30nPOtTgdCvmWnozKtTixPplw5KZMCcY/HjQpU+2r/rWYPS8Bl24Sc7kedv8lTZoFG32g+8QQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '26519486e91fbecda43ae73f4a90a7ac';

$pushID = 'U74fab1095de622784ca6129b7ccde06c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







