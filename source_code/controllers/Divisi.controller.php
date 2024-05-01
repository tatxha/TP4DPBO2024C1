<!-- Saya Tattha Maharany Yasmin Akbar dengan NIM 2201805 mengerjakan soal TP 4
dalam Praktikum mata kuliah Desain dan Pemrograman Berbasis Objek, untuk keberkahan-Nya
maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamin. -->

<?php
include_once("conf.php");
include_once("models/Divisi.class.php");
include_once("views/Divisi.view.php");
include_once("views/AddDivisi.view.php");

class DivisiController {
    private $divisi;

    function __construct(){
        $this->divisi = new Divisi(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    //   untuk view
    public function divisi() { // page divisi
      $this->divisi->open();
      $this->divisi->getDivisi();

      $data = array(
          'divisi' => array()
      );
      while($row = $this->divisi->getResult()){
          array_push($data['divisi'], $row);
      }

      $this->divisi->close();

      $view = new DivisiView();
      $view->render($data);
    }
   
    public function create() { // page create
      $this->divisi->open();
      $this->divisi->getDivisi();
      
      // inisalisasi
      $data = array(
        'divisi' => array()
      );
      
      //  data
      while($row = $this->divisi->getResult()){
        array_push($data['divisi'], $row);
      }
      
      $this->divisi->close();

      $view = new AddDivisiView();
      $view->render($data);
    }

    public function update($id) { // page update
      $this->divisi->open();
      $this->divisi->getDivisiById($id);
      
      $data = array(
        'divisi' => array()
      );
      
      $data['divisi'] = $this->divisi->getResult();
      while($row = $this->divisi->getResult()){
        array_push($data['divisi'], $row);
      }
  
      $this->divisi->close();
  
      $view = new UpdateDivisiView();
      $view->render($data);
    }  
  
    //   untuk models
    function add($data){ // add data
      $this->divisi->open();
      $this->divisi->add($data);
      $this->divisi->close();
      
      header("location:divisi.php");
    }

    function edit($data){
      $this->divisi->open();
      $this->divisi->edit($data);
      $this->divisi->close();

      header("location:divisi.php");
    }

    function delete($id){
      $this->divisi->open();
      $this->divisi->delete($id);
      $this->divisi->close();

      header("location:divisi.php");
    }

}