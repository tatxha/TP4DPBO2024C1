<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("conf.php");
include_once("models/Members.class.php");
include_once("models/Divisi.class.php");
include_once("views/Members.view.php");
include_once("views/AddMembers.view.php");
include_once("views/UpdateMembers.view.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $members->add($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $members->edit($_POST);
} elseif (isset($_GET['id'])) {
  $members->update($_GET['id']);
} else {
  $members->create();
}


?>
