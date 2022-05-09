<?php 

if(!defined('BASEPATH')) exit('no se permite el acceso al script');
class Codigo_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
 
function crearcurso($data){
    $this->db->insert('cursos',array('NOMBRE'=> $data['NOMBRE'], 'VIDEOS'=>$data['VIDEOS']));
}
function obtenercursos(){
   $query= $this->db->get('cursos');
   if($query->num_rows()>0)return $query;
   else return false;
   
}
function obtenercurso($id){
    $this->db->where('ID',$id);
    $query= $this->db->get('cursos');
  
    if($query->num_rows()>0)return $query;
    else return false; 
    
 }
 function actualizarcurso($id,$data){
    $datos = array(
        'NOMBRE'=>$data["NOMBRE"],
        'VIDEOS'=>$data["VIDEOS"]

    );
    $this->db->where('ID',$id);
    $query= $this->db->update('cursos',$datos);

 }

}

?>