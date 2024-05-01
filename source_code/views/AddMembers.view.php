<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  class AddMembersView {
    public function render($data){
    //   $no = 1;
      $dataMembers = null;

      // Ambil data divisi dari $data
      $divisi = $data['divisi'];

      // Buat opsi-opsi untuk dropdown divisi
      $pilihanDivisi = '';
      foreach ($divisi as $dataDivisi) {
          $pilihanDivisi .= '<option value="' . $dataDivisi['id_divisi'] . '">' . $dataDivisi['nama_divisi'] . '</option>';
      }

      $dataMembers .= 
      '<form action="createMembers.php" method="post">

      <br><br><div class="card">
      
      <div class="card-header bg-primary">
      <h1 class="text-white text-center">  Create New Member </h1>
      </div><br>
    
      <label> NAME: </label>
      <input type="text" name="name" class="form-control"> <br>
      
      <label> PILIH DIVISI: </label>
      <select id="id_divisi" name="id_divisi" class="form-control">
        <option value="">Pilih Divisi</option>
        ' . $pilihanDivisi . '
      </select> <br>
    
      <label> EMAIL: </label>
      <input type="email" name="email" class="form-control"> <br>
    
      <label> PHONE: </label>
      <input type="text" name="phone" class="form-control"> <br>
      
      <label> JOIN DATE: </label>
      <input type="date" name="join_date" class="form-control"> <br>
    
      <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
      <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
    
      </div>
      </form>';

      $tpl = new Template("templates/form.html");

      $tpl->replace("CRUD_DATA", $dataMembers);
      $tpl->write(); 
    }
  }
?>