<?php

Class Janjang extends CI_Controller{
    Public function index(){
    if(isset($_POST['btnSubmit'])){
        // memuat model Lingkaran_model
        $this->load->model('Janjang_model');

        // menangkap model yang telah dimuat oleh controller
        $model = $this->Janjang_model;

        // mengambil nilai yang dikirim melalui form
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $simir = $_POST['simir'];

        // menentukan nilai $radius
        $model->set_alas($alas);
        $model->set_tinggi($tinggi);
        $model->set_simir($simir);
    
        // memuat view dan mengirim model ke view
        $this->load->view('janjangview', array('model'=>$model));
        } else {

        // menampilkan form
        $this->load->view('janjang_form_view');
        }
    }
}