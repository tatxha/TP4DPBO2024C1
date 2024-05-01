<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  class AddDivisiView {
    public function render($data){
    //   $no = 1;
      $dataDivisi = null;

      $dataDivisi .= 
      '<form action="createDivisi.php" method="post">

      <br><br><div class="card">
      
      <div class="card-header bg-primary">
      <h1 class="text-white text-center">  Create New Member </h1>
      </div><br>
    
      <label> Nama Divisi: </label>
      <input type="text" name="nama_divisi" class="form-control"> <br>
    
      <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
      <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
    
      </div>
      </form>';

      $tpl = new Template("templates/form.html");

      $tpl->replace("CRUD_DATA", $dataDivisi);
      $tpl->write(); 
    }
  }
?>