<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaPacientes_controller extends CI_Controller {

   function __construct() {
       parent::__construct();
        $this->load->model('CrearCuenta_model');
   }

    public function index() {
        $data['result'] = $this->CrearCuenta_model->getDatos();
        $this->load->view('ListaPacientes_view',$data);
//       $this->load->helper('url');
    }
    
    public function editar($id) {
         $data['row'] = $this->CrearCuenta_model->editarDatos($id);
        $this->load->view('EditarListaPacientes_view', $data);
        
    }
    
   
    public function actualizar($id) {
        $this->CrearCuenta_model->actualizarDatos($id);
        redirect('ListaPacientes_controller');
    }

    public function eliminar($id) {
        $this->CrearCuenta_model->eliminarDatos($id);
        redirect('ListaPacientes_controller');
    }
}