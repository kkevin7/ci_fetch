<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CancionModel extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function findAll(){
    return $this->db->get('cancion')->result();
  }

  public function findById($id){
    $this->db->where('id', $id);
    return $this->db->get('cancion')->row();
  }

  public function create($datos){
    if ($this->db->insert('cancion', $datos)) {
      return true;
    }else{
      return false;
    }
  }

  public function update($datos){
    $this->db->where('id', $datos['id']);
    if ($this->db->update('cancion', $datos)) {
      return true;
    }else{
      return false;
    }
  }

  public function delete($id){
    $this->db->where('id',$id);
    if ($this->db->delete('cancion')) {
      return true;
    }else{
      return false;
    }
  }

}
