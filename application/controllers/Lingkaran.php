<?php

Class Lingkaran extends CI_Controller{
    Public function index(){
    if(isset($_POST['btnSubmit'])){
        // memuat model Lingkaran_model
        $this->load->model('Lingkaran_model');

        // menangkap model yang telah dimuat oleh controller
        $model = $this->Lingkaran_model;

        // mengambil nilai yang dikirim melalui form
        $radius = $_POST['jari2'];

        // menentukan nilai $radius
        $model->set_radius($radius);
    
        // memuat view dan mengirim model ke view
        $this->load->view('lingkaranview', array('model'=>$model));
        } else {

        // menampilkan form
        $this->load->view('lingkaran_form_view');
        }
    }
}