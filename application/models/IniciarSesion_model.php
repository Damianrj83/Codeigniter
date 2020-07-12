?<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IniciarSesion_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    public $autorizacion;

    public function validar() {
        // Get user input
        $correoElectronico = $this->input->post('correoElectronico');
        $contrasena = $this->input->post('contrasena');

        // Preparate the query
        $this->db->where('correoElectronico', $correoElectronico);
        $this->db->where('contrasena', $contrasena);

        // Run the query
        $query = $this->db->get('tbl_persona');
        $consulta = $query->row();
        //Validate user date.
        if ($query->num_rows() == 1) {
            //Check if user exists
            if ($consulta->nivelAutorizacion == 1) {
                // 1 = admin /0 = patient / 3 = data does not match
                $autorizacion = 1;

                return $autorizacion;
            } else {

                $autorizacion = 0;

                return $autorizacion;
            }
        } else {
            
            $autorizacion = 3;

            return $autorizacion;
        }
    }
    
     public function getUserName() {
         
          $correoElectronico = $this->input->post('correoElectronico');
        $contrasena = $this->input->post('contrasena');

        // Preparate the query
        $this->db->where('correoElectronico', $correoElectronico);
        $this->db->where('contrasena', $contrasena);

        // Run the query
        $query = $this->db->get('tbl_persona');
        $consulta = $query->row();
        //$name = $consulta->nombre;
         return $consulta;
     }

}
