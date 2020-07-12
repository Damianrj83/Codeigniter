<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        // $this->load->model('IniciarSesion_model');
    }

    public function index() {

        $this->load->view('IniciarSesion_view');


//       $this->load->helper('url');
    }

    public function process() {
        // Load the model
        // Validate if the  user can login
        $this->load->model('IniciarSesion_model');
        $result = $this->IniciarSesion_model->validar();

        // Now we verify the result
        switch ($result) {
            case 0:
                redirect('PerfilPaciente_controller');
                break;
            case 1:
                redirect('PerfilAdmin_controller');
                break;
            case 3:
                echo "<script>alert('Datos incorrectos, intentelo de nuevo');</script>";
                $this->index();
                // redirect('IniciarSesion_controller');

                break;
        }
    }//end



    public function loginStatus() {
        $this->load->model('IniciarSesion_model');
        $data['result'] = $this->IniciarSesion_model->getUserName();
    }

}
