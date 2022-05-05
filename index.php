<?php
require_once './config.php';
require_once './controllers/router.php';

$requestUri = explode('/simple-twitter/', $_SERVER['REQUEST_URI'])[1];


switch ($requestUri) {
    case (''):
        $run = (new Usuarios)->home();
        break;
    default:
        $run = (new Sitemap)->notfound();
        break;
}
