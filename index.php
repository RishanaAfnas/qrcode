<?php
include 'phpqrcode/qrlib.php';

$url= 'https://github.com/RishanaAfnas';
$location="images/";
$path=$location.uniqid().".png";//to generate unique id
$ecc='L';
$pixel_size=10;
$frame=10;
QRcode::png($url,$path,$ecc,$pixel_size,$frame);

echo "<img src='$path'>";



?>

