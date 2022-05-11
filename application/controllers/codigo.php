<?php 

defined('BASEPATH') OR exit('no se permite el acceso al script');

class codigo extends CI_Controller {
 

    
    function __construct(){
        parent::__construct();
        $this->load->helper('OTRAS'); 
        $this->load->helper('form');
    } 
    function index(){
        $this->load->library('Menu',array("inicio","controlador","suerte","saludos"));
        $data['mi_menu'] = $this->menu->contruirMenu();
        $this->load->view('codigo/header');
        $this->load->view('codigo/bienvenido',$data );
    }

    function holamundo(){
      
        $this->load->view('codigo/header');
        $this->load->view('codigo/prueba');
    }
    function nuevo(){
        $this->load->view('codigo/header');
        $this->load->view('codigo/formulario');
    }

}
?>