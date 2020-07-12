<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    public function crear() {
        $data = array(
            'date' => $this->input->post('date'),
            'time' => $this->input->post('cortimereoElectronico'),
            'estado' => $this->input->post('estado')
        );
        $this->db->insert('tbl_cita', $data);
    }

}
