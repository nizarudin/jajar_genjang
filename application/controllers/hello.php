<?php

class Hello extends CI_Controller{
    public function index(){

    // memuat model 'Hello_model'
        $this->load->model('Hello_model');

    // menangkap objek dari kelas Hello_model
    // yang telah dimuat ke variabel $model
        $model = $this->Hello_model;

    // mengambil data dari model
        $s = $model->str;
    
    // membuat data yang akan dikirim ke view
    // dalam bentuk array
        $data['teks'] = $s;
    
    // memuat view 'helloview'
    // dengan mengirimkan data ke view yang bersangkutan
        $this->load->view('helloview', $data);
    
    }
}

