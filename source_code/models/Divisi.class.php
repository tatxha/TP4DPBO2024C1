<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("models/DB.class.php");

class Divisi extends DB
{
    function getDivisi()
    {
        $query = "SELECT * FROM divisi";
        return $this->execute($query);
    }
    function getDivisiById($id_divisi)
    {
        $query = "SELECT * FROM divisi WHERE id_divisi=$id_divisi";
        return $this->execute($query);
    }

    function add($data)
    {
        $nama_divisi = $data['nama_divisi'];   

        $query = "INSERT INTO divisi VALUES ('', '$nama_divisi')";
        return $this->execute($query);
    }
    
    function edit($data)
    {
        $id_divisi = $data['id_divisi'];   
        $nama_divisi = $data['nama_divisi'];   
    
        $query = "UPDATE divisi SET nama_divisi='$nama_divisi' WHERE id_divisi=$id_divisi";
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM divisi WHERE id_divisi=$id";
        return $this->execute($query);
    }

}
