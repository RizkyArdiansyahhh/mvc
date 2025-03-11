<?php

class About extends Controller{
    public function index(){
        $data = [
            "name" => $this->model("User_model")->getUser(),
            "title" => "About Me"
        ];
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }
    public function page(){
        $data = ["title" => "Page"];
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}