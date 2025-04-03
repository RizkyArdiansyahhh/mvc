<?php

class Mahasiswa extends Controller{

    public function index(){
        $data = [
            "title" => "Daftar Mahasiswa",
            "mhs" => $this->model("Mahasiswa_model")->getAllMahasiswa(),
        ];
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id){
        $data = [
            "title" => "Detail Mahasiswa",
            "mhs" => $this->model("Mahasiswa_model")->getMahasiswaById($id),
        ];
        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }

    public function insert(){
        if($this->model("Mahasiswa_model")->insertStudent($_POST) > 0){
            header("Location: ". BASE_URL . "/mahasiswa");
            exit;
        }
    }
}