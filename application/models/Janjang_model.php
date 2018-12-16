<?php

Class Janjang_model extends CI_Model{
    // Atribut model
    Private $alas;
    Private $tinggi;
    Private $simir;

    // Metode untuk menentukan nilai $alas dn $tinggi
    Public function set_alas($a){
        $this->alas = $a;
    }

    Public function set_tinggi($b){
        $this->tinggi = $b;
    }

    Public function set_simir($c){
        $this->simir = $c;
    }


    // Metode untuk mengambil nilai $alas dn $tinggi
    Public function get_alas() {
        Return $this->alas;
    }

    Public function get_tinggi(){
        Return $this->tinggi;
    }

    Public function get_simir(){
        Return $this->simir;
    }

    // Metode untuk menghitung luas lingkaran
    Public function hitung_luas() {
        Return $this->alas * $this->tinggi;
    } 

    // Metode untuk menghitung keliling Lingkaran
    Public function hitung_keliling() {
        Return 2 * ($this->alas + $this->simir);
    }
}