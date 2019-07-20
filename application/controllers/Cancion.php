<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// clase controladora
class Cancion extends CI_Controller {

    public function __construct()
    {
        // construccion con metodos de herencia
        parent::__construct();
        // cargar el model
        $this->load->model('CancionModel');
    }

    public function index()
	{
        // hacer un arreglo
        $datos = [
            'canciones' => $this->CancionModel->findAll()
        ];
        // LLamada a los templates header
        $this->load->view('template/header');
        // cargar la vista
        $this->load->view('cancion/index',$datos);
        // LLamada a los templates footer
        $this->load->view('template/footer');
    }
    
    public function recargar(){
        // hacer arreglo
        $datos = [
            'canciones' => $this->CancionModel->findAll()
        ];
        // mostrar el contenido de la tabla
        $this->load->view('cancion/tbody',$datos);
    }

    public function mostrarAdd(){
        $this->load->view('cancion/agregar');
    }

    public function create(){
        //hacer una arreglo
        $datos= [
            'id' => null,
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'duracion' => $_POST['duracion'],
            'estado' => 1,
        ];
        var_dump($datos);
        // llamar al metodo que crea registros
        $this->CancionModel->create($datos);
    }

    public function delete($id){
        //llamar al metodo que elimina registros
        $this->CancionModel->delete($id);
    }

    public function update(){
        //hacer una arreglo
        $datos= [
            'id' => $_POST['id'],
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'duracion' => $_POST['duracion'],
            'estado' => $_POST['estado']
        ];
        var_dump($datos);
        // llamar al metodo que crea registros
        $this->CancionModel->update($datos);
    }

    public function mostrarEdit($id){
        $datos = [
            'entity' => $this->CancionModel->findById($id)
        ];
        $this->load->view('cancion/editar', $datos);
    }
}