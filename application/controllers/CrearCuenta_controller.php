<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrearCuenta_controller extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('CrearCuenta_model');
   }

    public function index() {
        $this->load->view('crearCuenta_view');
//       $this->load->helper('url');
    }
    
    public function crearCuenta() {
        $this->CrearCuenta_model->crear();
//        redirect('PerfilPaciente_controller/index');
          redirect('');
    }
    
    

}
