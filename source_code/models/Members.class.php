<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("models/DB.class.php");

class Members extends DB
{
    function getMembers()
    {
        $query = "SELECT members.id, members.name, members.email, members.phone, members.join_date, divisi.nama_divisi FROM members JOIN divisi ON members.id_divisi = divisi.id_divisi ORDER BY members.id";
        return $this->execute($query);
    }
    function getMembersById($id)
    {
        $query = "SELECT * FROM members JOIN divisi ON members.id_divisi = divisi.id_divisi WHERE id=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];   
        $email = $data['email'];   
        $phone = $data['phone'];   
        $join_date = $data['join_date'];   
        $id_divisi = $data['id_divisi'];   

        $query = "INSERT INTO members (name, email, phone, join_date, id_divisi) VALUES ('$name', '$email', '$phone', '$join_date', '$id_divisi')";
        return $this->execute($query);
    }
    
    function update($data)
    {
        $id = $data['id'];   
        $name = $data['name'];   
        $email = $data['email'];   
        $phone = $data['phone'];   
        $join_date = $data['join_date'];   
        $id_divisi = $data['id_divisi'];   
    
        $query = "UPDATE members SET name='$name', email='$email', phone='$phone', join_date='$join_date', id_divisi='$id_divisi' WHERE id=$id";
        return $this->execute($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM members WHERE id=$id";
        return $this->execute($query);
    }

}
