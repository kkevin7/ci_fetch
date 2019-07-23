<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cancion extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('CancionModel'));
  }

  public function index()
  {
    $this->load->view('templates/header');
    $this->load->view('cancion/index');
    $this->load->view('templates/footer');
  }

  public function tbody(){
    $datos=[
      'canciones' => $this->CancionModel->findAll()
    ];
    $this->load->view('cancion/tbody', $datos);
  }

  public function create(){
    $datos=[
      'id' => null,
      'titulo' => $_POST['titulo'],
      'autor' => $_POST['autor'],
      'duracion' => $_POST['duracion'],
      'estado' => 1
    ];
    var_dump($datos);
    $this->CancionModel->create($datos);
  }

  public function delete($id){
    $this->CancionModel->delete($id);
  }

  public function findById($id){
    echo json_encode($this->CancionModel->findById($id));
  }

  public function update(){
    $datos=[
      'id' => $_POST['id'],
      'titulo' => $_POST['titulo'],
      'autor' => $_POST['autor'],
      'duracion' => $_POST['duracion'],
      'estado' => $_POST['estado']
    ];
    var_dump($datos);
    $this->CancionModel->update($datos);
  }

}
