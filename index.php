<?php
require __DIR__ . "/vendor/autoload.php";
use Zxing\QrReader;
$qrcode = new QrReader('tests/qrcodes/test.png');
$text = $qrcode->text(); //return decoded text from QR Code
echo $text;
?>