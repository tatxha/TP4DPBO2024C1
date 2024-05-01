<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Divisi.controller.php");

$divisi = new DivisiController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Jika formulir dikirimkan, panggil fungsi add dari DivisiController
    $divisi->add($_POST);
} 
else {
    // Jika tidak, tampilkan formulir untuk menambahkan anggota baru
    $divisi->create();
}
?>
