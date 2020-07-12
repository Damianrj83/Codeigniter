<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrearCitaSinRegistro_controller extends CI_Controller {

   function __construct() {
       parent::__construct();
        $this->load->model('CrearCitaSinRegistro_model');
   }

    public function index() {
   
        $this->load->view('CrearCitaSinRegistro_view');
//       $this->load->helper('url');
    }
    
       public function crearCita() {
        $this->CrearCitaSinRegistro_model->crear();
//        redirect('PerfilPaciente_controller/index');
         // redirect('');
    }
   
}