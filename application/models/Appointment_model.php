<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    public function crear() {
        $data = array(
            'fecha' => $this->input->post('fecha')
            
        );
        $this->db->insert('tbl_cita', $data);
    }

}
