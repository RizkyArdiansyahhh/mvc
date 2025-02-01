<?php

class App{
    public function __construct(){
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl(){
        $url = $_GET["url"];
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}