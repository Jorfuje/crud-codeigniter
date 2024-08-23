<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Query Builder
    public function getUsuarios()
    {
        return $this->db->get("usuarios")->result();
    }

    public function getUsuario(int $id)
    {
        return $this->db->get_where('usuarios', ['id' => $id])->row();
    }

    public function setUsuario(array $datos)
    {
        return $this->db->insert("usuarios", $datos);
    }

    public function updateUsuario(int $id, array $datos)
    {
        return $this->db->where('id', $id)->update('usuarios', $datos);
    }

    public function deleteUsuario(int $id)
    {
        return $this->db->where('id', $id)->delete('usuarios');
    }

}
