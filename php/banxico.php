<?php
require 'simple_html_dom.php';

$url= "https://dolarenmexico.com/precio-dolar-banamex.php";
$html = file_get_html($url);

$value1 = $html->find('div[class=content]',1)->find('p',0)->find('span',1);
$value2 = $html->find('div[class=content]',1)->find('p',1)->find('span',1);

$val1 = (string) $value1;
$val2 = (string) $value2;

$html->clear();
unset($html);

?>