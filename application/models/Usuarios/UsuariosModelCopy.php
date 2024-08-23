<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getUsuarios()
    {
        return $this->db->query("SELECT * FROM usuarios")->result();
    }

    // Query Builder
    // public function getUsuarios()
    // {
    //     return $this->db->get("usuarios")->result();
    // }

    public function setUsuario(string $nombre, string $apellido, string $correo)
    {
        return $this->db->query("INSERT INTO usuarios (nombre, apellido, correo) VALUES ($nombre, $apellido, $correo)");
    }

    public function getUsuario(int $id)
    {
        return $this->db->query("SELECT * FROM usuarios WHERE id = {$id}")->row();
    }

    public function updateUsuario(int $id, string $nombre, string $apellido, string $correo)
    {
        $data = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'correo' => $correo
        );
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
    }

    public function deleteUsuario(int $id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('usuarios');
    }
}
