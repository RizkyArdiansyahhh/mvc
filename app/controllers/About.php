<?php

class About{
    public function index($name = "anonymous", $work = "student"){
        echo "Perkenalkan nama saya $name, kerja sebagai $work";
        echo "<br/>";
        echo "About/index";
    }
    public function page(){
        echo "About/page";
    }
}