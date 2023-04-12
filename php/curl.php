<?php

$url = 'https://www.banamex.com/economia-finanzas/es/mercado-de-divisas/index.html?lid=undefined-BarraProductos-Information-irDivisasyMercados-ES';
$html = file_get_contents($url);

preg_match_all('/<div id=""/',$html,$matches, PREG_SET_ORDER);

print_r($matches);

?>