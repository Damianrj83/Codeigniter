<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        // $this->load->model('IniciarSesion_model');
    }

    public function index() {

        $this->load->view('ContactUs_view');
    }

}
