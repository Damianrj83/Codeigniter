<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PerfilAdmin_controller extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('CrearCuenta_model');
   }

    public function index() {
        $this->load->view('PerfilAdmin_view');
//       $this->load->helper('url');
    }
    
//  public function mostrarDatos() {
//      $data['result'] = $this->CrearCuenta_model->getDatos();
//      // $this->CrearCuenta_model->getDatos();
//
//   }
    
    

}
