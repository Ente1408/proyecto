<?php 

defined('BASEPATH') OR exit('no se permite el acceso al script');

class Cursos extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('codigo_model');
        $this->load->helper('form');

    }
    function index(){
        $data['segmento'] = $this->uri->segment(3);
        $this->load->view('codigo/header');
        
        if(!$data['segmento']){
           $data['cursos'] = $this->codigo_model->obtenercursos();
        }else{
           $data['cursos'] = $this->codigo_model->obtenercurso( $data['segmento']);

        }
        $this->load->view('cursos/index',$data);
        

    }
       function nuevo(){
        $this->load->view('codigo/header');
        $this->load->view('cursos/formulario');
        
    }
    function actualizar2(){
        $data = array(
            
            'NOMBRE' => $this->input->post('nombre'),
            'VIDEOS' => $this->input->post('videos')
        );
        $this->codigo_model->actualizarcurso($this->uri->segment(3),$data);
        $this->load->view('codigo/header');
        $this->load->view('cursos/index');
  
    }
    function actualizar(){
        $data['id']= $this->uri->segment(3);
        $data['curso'] = $this->codigo_model->obtenercurso($data['id']);
        $this->load->view('codigo/header');
        $this->load->view('cursos/actualizar',$data);
    }
    function recibirdatos(){
        $data = array(
            'NOMBRE' => $this->input->post('nombre'),
            'VIDEOS' => $this->input->post('videos')
        );
        $this->codigo_model->crearcurso($data);
        $this->index();
  
    }
}

?>