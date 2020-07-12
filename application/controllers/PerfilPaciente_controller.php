<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PerfilPaciente_controller extends CI_Controller {

   function __construct() {
       parent::__construct();
        //$this->load->model('IniciarSesion_model');
        
   }

    public function index() {
      //  $data = $this->IniciarSesion_model->getUserName();
        $this->load->view('PerfilPaciente_view');
        $this->load->helper('url');
    }
    
  
    

}
