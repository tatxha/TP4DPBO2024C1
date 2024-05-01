<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  include_once("models/Template.class.php");

  class UpdateDivisiView {
    public function render($data){
    //   $no = 1;
      // Ambil data divisi dari $data
      $divisi = $data['divisi'];
      
      $dataDivisi = null;
      $dataDivisi .= 
      '<form action="editDivisi.php" method="post" enctype="multipart/form-data">

      <br><br><div class="card">
      
      <div class="card-header bg-primary">
      <h1 class="text-white text-center"> Update Divisi </h1>
      </div><br>
      <input type="hidden" name="id_divisi" value="' . $divisi['id_divisi'] . '">
      <label> NAMA DIVISI: </label>
      <input type="text" name="nama_divisi" class="form-control" value="' . $divisi['nama_divisi'] . '"> <br>
    
      <button class="btn btn-success" type="submit" name="update"> Update </button><br>
      <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
    
      </div>
      </form>';

      $tpl = new Template("templates/form.html");

      $tpl->replace("CRUD_DATA", $dataDivisi);
      $tpl->write(); 
    }
  }
?>