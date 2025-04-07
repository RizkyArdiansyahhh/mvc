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
            Flasher::setFlash("Berhasil","Ditambahkan", "success");
            header("Location: ". BASE_URL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash("Gagal", "Ditambahkan", "danger");
        }
    }

    public function delete($id){
        if($this->model("Mahasiswa_model")->deleteStudent($id) > 0){
            Flasher::setFlash("Berhasil", "Dihapus", "success");
            header("Location:". BASE_URL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash("Gagal", "Dihapus", "danger");
        }
    }

    public function getUbah(){
        $id = $_POST["id"];
        $data = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        echo json_encode($data);
    }

    public function edit(){
        if($this->model("Mahasiswa_model")->editStudent($_POST) > 0){
            Flasher::setFlash("Berhasil","Diubah", "success");
            header("Location: ". BASE_URL . "/mahasiswa");
            exit;
        }else{
            Flasher::setFlash("Gagal", "Diubah", "danger");
        }
    }
}