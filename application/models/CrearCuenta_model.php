<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CrearCuenta_model extends CI_Model {

    function __construct() {
        $this->load->database();
    }

    public function crear() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'sintomas'=> $this->input->post('sintomas'),
            'contrasena'=> $this->input->post('contrasena')
        );
        $this->db->insert('tbl_persona', $data);
    }

    public function getDatos() { 
        $query = $this->db->query('SELECT * FROM tbl_persona');
        return $query->result();
    }

    function editarDatos($id) {
        $query = $this->db->query('SELECT * FROM tbl_persona WHERE `id` =' . $id);
        return $query->row();
    }

    function actualizarDatos($id) {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'correoElectronico' => $this->input->post('correoElectronico'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono'),
            'sintomas' => $this->input->post('sintomas')
            
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_persona', $data);
    }

    function eliminarDatos($id) {
        $this->db->where('id', $id);
        $this->db->delete('tbl_persona');
    }

}
