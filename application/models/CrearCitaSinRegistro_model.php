<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrearCitaSinRegistro_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    public function crear() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'sintomas'=> $this->input->post('sintomas')
        );
        $this->db->insert('tbl_persona', $data);
    }

}
