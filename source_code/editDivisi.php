<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("conf.php");
include_once("models/Divisi.class.php");
include_once("models/Divisi.class.php");
include_once("views/Divisi.view.php");
include_once("views/AddDivisi.view.php");
include_once("views/UpdateDivisi.view.php");
include_once("controllers/Divisi.controller.php");

$divisi = new DivisiController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $divisi->add($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $divisi->edit($_POST);
} elseif (isset($_GET['id'])) {
  $divisi->update($_GET['id']);
} else {
  $divisi->create();
}

?>
