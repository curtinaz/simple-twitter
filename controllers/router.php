<?php

class Usuarios {
    public function home(){
        require 'views/home.php';
    }
}

class Sitemap {
    public function notfound() {
        require 'views/not-found.php';
    }
}