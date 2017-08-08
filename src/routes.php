<?php
$routes = [
    'metadata',
    'getArticles',
    'getSources'

];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}
