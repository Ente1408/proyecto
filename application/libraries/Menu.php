<?php
    
if( ! defined('BASEPATH')) exit('no se permite el acceso al script');
    class Menu{
        private $arr_menu;
        public function __construct($arr){
            $this->arr_menu = $arr;
    
        } 

        
        function contruirMenu(){
            $retu_menu= "<nav><ul>";
            foreach($this->arr_menu as $opcion){
                $retu_menu .= "<li>".$opcion."</li>";
            }
            $retu_menu .= "</ul></nav>";
            return $retu_menu;
        }


    }

?>