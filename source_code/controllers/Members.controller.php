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

class MembersController {
    private $members;
    private $divisi;

    function __construct(){
        $this->members = new Members(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
        $this->divisi = new Divisi(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    }

    //   untuk view
    public function index() { // page index
      $this->members->open();
      $this->members->getMembers();

      $data = array(
          'members' => array()
      );
      while($row = $this->members->getResult()){
          array_push($data['members'], $row);
      }

      $this->members->close();

      $view = new MembersView();
      $view->render($data);
    }
   
    public function create() { // page create
      $this->members->open();
      $this->members->getMembers();
      $this->divisi->open();
      $this->divisi->getDivisi();
      
      // inisalisasi
      $data = array(
        'members' => array(),
        'divisi' => array()
      );
      
      //  masukin data ke array
      while($row = $this->divisi->getResult()){
        array_push($data['divisi'], $row);
      }
      while($row = $this->members->getResult()){
        array_push($data['members'], $row);
      }
      
      $this->members->close();

      $view = new AddMembersView();
      $view->render($data);
    }
  
  public function update($id) { // page update
    $this->members->open();
    $this->members->getMembersById($id);

    $this->divisi->open();
    $this->divisi->getDivisi();
    
    $data = array(
      'divisi' => array()
    );
    
    $data['members'] = $this->members->getResult();
    while($row = $this->divisi->getResult()){
      array_push($data['divisi'], $row);
    }

    $this->members->close();
    $this->divisi->close();

    $view = new UpdateMembersView();
    $view->render($data);
  }  

  //   untuk models
  function add($data){ // add data
    $this->members->open();
    $this->members->add($data);
    $this->members->close();
    
    header("location:index.php");
  }

  function edit($data){
    $this->members->open();
    $this->members->update($data);
    $this->members->close();

    header("location:index.php");
  }

  function delete($id){
    $this->members->open();
    $this->members->delete($id);
    $this->members->close();

    header("location:index.php");
  }

}