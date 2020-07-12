<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Appointment_model');
    }

    public function index() {

        $this->load->view('Appointment_view');
    }
    
    public function reservar() {
        $this->Appointment_model->crear();
        redirect('CrearCitaSinRegistro_controller');
    }
}
