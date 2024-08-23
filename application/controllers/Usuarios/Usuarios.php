<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Usuarios/UsuariosModel");
	}

	public function index()
	{
		$data['usuarios'] = $this->UsuariosModel->getUsuarios();
		$this->load->view('Usuarios/usuarios', $data);
	}

	// public function saveUser()
	// {

	// 	if ($this->input->post()) {
	// 		$nombre = $this->db->escape($_POST["nombre"]);
	// 		$apellido = $this->db->escape($_POST["apellido"]);
	// 		$correo = $this->db->escape($_POST["correo"]);
	// 		if ($this->UsuariosModel->setUsuario($nombre, $apellido, $correo)) {
	// 			redirect(base_url() . 'Usuarios/usuarios');
	// 		}
	// 	}
	// }

	// Para usar Query Builder
	public function saveUser()
	{

		if ($this->input->post()) {
			$nombre = $this->db->escape($_POST["nombre"]);
			$apellido = $this->db->escape($_POST["apellido"]);
			$correo = $this->db->escape($_POST["correo"]);
			if ($this->UsuariosModel->setUsuario($_POST)) {
				redirect(base_url() . 'Usuarios/usuarios');
			}
		}
	}

	public function modicarUsuario($id = null)
	{
		if (!$id == null) {
			$id = $this->db->escape((int)$id);
			$data['usuario'] = $this->UsuariosModel->getUsuario($id);
			$this->load->view('Usuarios/modificarUsuario', $data);
		} else {
			redirect(base_url() . 'Usuarios/usuarios');
		}
	}

	// public function updateUser()
	// {
	// 	if ($this->input->post()) {
	// 		$id = (int) $this->input->post('id');
	// 		$nombre = $this->input->post('nombre');
	// 		$apellido = $this->input->post('apellido');
	// 		$correo = $this->input->post('correo');
	// 		if ($this->UsuariosModel->updateUsuario($id, $nombre, $apellido, $correo)) {
	// 			redirect(base_url() . 'Usuarios/usuarios');
	// 		}
	// 	}
	// }

	// Query Builder
	public function updateUser()
	{
		if ($this->input->post()) {
			$id = (int) $this->input->post('id');
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$correo = $this->input->post('correo');
			$datos = array('nombre' => $nombre, 'apellido' => $apellido, 'correo' => $correo);
			if ($this->UsuariosModel->updateUsuario($id, $datos)) {
				redirect(base_url() . 'Usuarios/usuarios');
			}
		}
	}

	public function eliminarUsuario(int $id)
	{
		if ($this->UsuariosModel->deleteUsuario($id)) {
			redirect(base_url() . 'Usuarios/usuarios');
		}
	}
}
