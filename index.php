<?php
include "./src/Parser.php";
$parser = new IosPngParser\Parser();
$ipaFilePath = 'aa.png'; //需要处理的图片
$pngImgName = './aa.png'; //转换后的图片
$res = $parser::fix($ipaFilePath, $pngImgName);
var_dump($res);
