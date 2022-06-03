<?php

class ItemsController {
    
//    private $view;
    
    public function __construct() {
        $this->view = new View();
    } // constructor
    
     public function inicio(){
         
         $this->view->show("inicioView.php", null);
     } // listar
} // fin clase

?>


