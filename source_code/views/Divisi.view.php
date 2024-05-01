<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  class DivisiView {
    public function render($data){
      $link = '<a type="button" class="btn btn-primary nav-link active" href="createDivisi.php?id_tambah">Add New</a>';
      $tableHeader = '
        <th>ID</th>
        <th>NAMA DIVISI</th>
        <th>ACTIONS</th>
      '; 

      $dataDivisi = null;
      foreach($data['divisi'] as $val){
        list($id_divisi, $nama_divisi) = $val;
        $dataDivisi .= "<tr>
          <td>" . $id_divisi . "</td>
          <td>" . $nama_divisi . "</td>
          <td>
              <a class='btn btn-success' href='editDivisi.php?id=" . $id_divisi ."'>Edit</a>
              <a class='btn btn-danger' href='divisi.php?id_hapus=" . $id_divisi ."'>Delete</a>
          </td>";
        $dataDivisi .= "</tr>";
      }

      $tpl = new Template("templates/index.html");

      $tpl->replace("ALL_LINK", $link);
      $tpl->replace("ALL_TABLE_HEADER", $tableHeader);
      $tpl->replace("ALL_DATA", $dataDivisi);
      $tpl->write(); 
    }
  }
?>