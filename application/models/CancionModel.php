<?php 
class CancionModel extends CI_Model{
    public function __construct()
    {
        /*hERENCIA DE LA CLASE PADRE */
        parent::__construct();
    }
    
    public function findAll(){
        /*obtener los resultados */
        return $this->db->get('cancion')->result();
    }

    public function findById($id){
        /*Buscar por un ID */
        $this->db->where('id',$id);
        return $this->db->get('cancion')->row();
    }

    public function create($datos){
        /*Guardar registros en la base de datos */
        if($this->db->insert('cancion', $datos)){
            return true;
        }else{
            return false;
        }
    }

    public function update($datos){
        /*Actualizar registros */
        $this->db->where('id', $datos['id']);
        if($this->db->update('cancion', $datos)){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        /*Eliminar registros de la base datos */
        $this->db->where('id', $id);
        if($this->db->delete('cancion')){
            return true;
        }else{
            return false;
        }
    }
}
?>