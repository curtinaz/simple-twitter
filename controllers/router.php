<?php

class Usuarios {
    public function home(){
        if(empty($_COOKIE['token'])) {
            setcookie('token', 'teste');
            require 'views/login.php';
            die();
        }
        require 'views/home.php';
    }
}

class Sitemap {
    public function notfound() {
        require 'views/not-found.php';
    }
}