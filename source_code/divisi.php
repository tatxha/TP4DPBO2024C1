<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Divisi.controller.php");

$divisi = new DivisiController();

if (isset($_POST['add'])) {
    $divisi->add($_POST);
}
 else if (!empty($_GET['id_hapus'])) {
    $id_divisi = $_GET['id_hapus'];
    $divisi->delete($id_divisi);
} else{
    $divisi->divisi();
}
