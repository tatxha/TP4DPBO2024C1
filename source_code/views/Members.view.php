<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
  class MembersView {
    public function render($data){
    //   $no = 1;
    $link = '<a type="button" class="btn btn-primary nav-link active" href="createMembers.php">Add New</a>';
    $tableHeader = '
      <th>ID</th>
      <th>NAME</th>
      <th>DIVISI</th>
      <th>EMAIL</th>
      <th>PHONE</th>
      <th>JOINING DATE</th>
      <th>ACTIONS</th>
    ';  
    $dataMembers = null;
    //   $dataAuthor = null;
      foreach($data['members'] as $val){
        list($id, $name, $email, $phone, $join_date, $nama_divisi) = $val;
        $nama_divisi = ($nama_divisi != null) ? $nama_divisi : 'Tidak Ada';
        $dataMembers .= "<tr>
                <td>" . $id . "</td>
                <td>" . $name . "</td>
                <td>" . $nama_divisi . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>
                <td>
                    <a class='btn btn-success' href='editMembers.php?id=" . $id ."'>Edit</a>
                    <a class='btn btn-danger' href='index.php?id_hapus=" . $id ."'>Delete</a>
                </td>";
                // <td>
                // </td>
        $dataMembers .= "</tr>";
      }

      $tpl = new Template("templates/index.html");

    //   $tpl->replace("OPTION", $dataAuthor);
      $tpl->replace("ALL_DATA", $dataMembers);
      $tpl->replace("ALL_LINK", $link);
      $tpl->replace("ALL_TABLE_HEADER", $tableHeader);
      $tpl->write(); 
    }
  }
?>