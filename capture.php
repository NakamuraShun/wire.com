<?php

$url = $_REQUEST['url'];

$imgName = $url;
$imgName = str_replace('https', '', $imgName);
$imgName = str_replace('http', '', $imgName);
$imgName = str_replace('www', '', $imgName);
$imgName = str_replace('/', '', $imgName);
$imgName = str_replace(':', '', $imgName);
$imgName = "$imgName.jpg";


//APIでキャプチャ画像を、screenshotディレクトリへ格納
$img = file_get_contents( "http://api.screenshotlayer.com/api/capture?access_key=4ddedcc3caf9d46d3a8b2041814170ad&url={$_REQUEST['url']}&viewport=1400x2500&width=250&height=400" );
file_put_contents("./screenshots/$imgName",$img);

?>

