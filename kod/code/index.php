<?php

function generateImageCode($code){
    $img = imagecreatefromgif("code_bg.gif");
    $font_color = imagecolorallocate($img, 187,166,131);
    imagettftext($img, 15, 0, 15, 19, $font_color, "elegant.ttf", $code);
    return $img;
}

session_start();
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-Type: image/gif");
imagegif(generateImageCode($_SESSION['code']));
?>