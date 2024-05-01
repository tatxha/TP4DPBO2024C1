<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  include_once("models/Template.class.php");

  class UpdateMembersView {
    public function render($data){
    //   $no = 1;
      // Ambil data divisi dari $data
      $members = $data['members'];
      $divisi = $data['divisi'];

      // Buat opsi-opsi untuk dropdown divisi
      $pilihanDivisi = '';
      foreach ($divisi as $dataDivisi) {
          $selected = ($dataDivisi['id_divisi'] == $members['id_divisi']) ? 'selected' : ''; // menambahkan atribut selected jika nilai sama dengan yang dipilih sebelumnya
          $pilihanDivisi .= '<option value="'.$dataDivisi['id_divisi'].'" '.$selected.'>'.$dataDivisi['nama_divisi'].'</option>';
      }

      
      $dataMembers = null;
      $dataMembers .= 
      '<form action="editMembers.php" method="post" enctype="multipart/form-data">

      <br><br><div class="card">
      
      <div class="card-header bg-primary">
      <h1 class="text-white text-center"> Update Member </h1>
      </div><br>
      <input type="hidden" name="id" value="' . $members['id'] . '">
      <label> NAME: </label>
      <input type="text" name="name" class="form-control" value="' . $members['name'] . '"> <br>
      
      <label> PILIH DIVISI: </label>
      <select id="id_divisi" name="id_divisi" class="form-control">
        <option value="">Pilih Divisi</option>
        ' . $pilihanDivisi . '
      </select> <br>
    
      <label> EMAIL: </label>
      <input type="email" name="email" class="form-control" value="' . $members['email'] .'"> <br>
    
      <label> PHONE: </label>
      <input type="text" name="phone" class="form-control" value="' . $members['phone'] . '"> <br>
      
      <label> JOIN DATE: </label>
      <input type="date" name="join_date" class="form-control" value="' . $members['join_date'] . '"> <br>
    
      <button class="btn btn-success" type="submit" name="update"> Update </button><br>
      <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
    
      </div>
      </form>';

      $tpl = new Template("templates/form.html");

      $tpl->replace("CRUD_DATA", $dataMembers);
      $tpl->write(); 
    }
  }
?>