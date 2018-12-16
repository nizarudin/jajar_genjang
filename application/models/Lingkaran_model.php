<?php

Class Lingkaran_model extends CI_Model{
    // Mendefinisikan konstanta untuk nilai PI
    Const PI = 3.14;

    // Atribut model
    Private $radius;

    // Metode untuk menentukan nilai $radius
    Public function set_radius($r){
        $this->radius = $r;
    }

    // Metode untuk mengambil nilai $radius
    Public function get_radius() {
        Return $this->radius;
    }

    // Metode untuk menghitung luas lingkaran
    Public function hitung_luas() {
        Return self::PI * $this->radius * $this->radius;
    } 

    // Metode untuk menghitung keliling Lingkaran
    Public function hitung_keliling() {
        Return 2 * self::PI * $this->radius;
    }
}