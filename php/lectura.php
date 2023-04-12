<?php
require 'simple_html_dom.php';

$urlDolar = "https://www.eldolar.info/es-MX/mexico/dia/hoy";

$html = file_get_html($urlDolar);
$html1 = file_get_html($urlUMA);


$spans = $html->find('div[class=container]');
$spans1 = $html1->find('div[class=container mtb]');

foreach($spans as $span){
    $specific = $span->find('h1 strong span',1);
    $texto = $specific->innertext;
}

foreach($spans1 as $span){
    $specific = $span->find('table tbody tr',2)->find('td',1);
    $texto1 = $specific->innertext;
}

$texto = substr($texto, 0, 5);
 
$html->clear(); 
$html1->clear();
unset($html);
unset($html1);
?>