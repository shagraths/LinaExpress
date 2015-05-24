<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('modelo');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('Por_defecto/header');
        $this->load->view('Por_defecto/footer');
    }

    function cargar_login() {
        $this->load->view('Por_defecto/login');
    }

    function principal_supervisor() {
        $this->load->view('SUPERVISOR/Principal');
    }

    function principal_vendedor() {
        $this->load->view('VENDEDOR/Principal');
    }

    function principal_cliente() {
        $this->load->view('CLIENTE/Principal');
    }

    function principal_admin() {
        $this->load->view('ADMINISTRADOR/Principal');
    }

    function verificarLogin() {
        $valor = 0;
        $id_persona = '';
        $login = '';
        $password = 3;
        $tipo = '';

        if ($this->session->userdata('esta_logueado') == true) {
            $valor = 1;
            $id_persona = $this->session->userdata('id_persona');
            $login = $this->session->userdata('login');
            $password = $this->session->userdata('password');
            $tipo = $this->session->userdata('tipo');
        }
        echo json_encode(array('valor' => $valor,
            'id_persona' => $id_persona,
            'login' => $login,
            'password' => $password,
            'tipo' => $tipo));
    }

    function conectar() {
        $id = '';
        $login = $this->input->post("nombre");
        $clave = $this->input->post("clave");
        $tipo = '';
        $rut = '';
        $estado = '';
        $valor = 0;
        $cookie = array('id' => '', 'rut' => '', 'login' => '', 'clave' => '', 'tipo' => '', 'esta_logueado' => false);
        if ($this->modelo->conectar($login, $clave)->num_rows() == 1) {
            $data = $this->modelo->conectar($login, $clave)->result();
            foreach ($data as $fila) {
                $id = $fila->ID;
                $rut = $fila->Rut;
                $login = $fila->Login;
                $clave = $fila->Clave;
                $tipo = $fila->id_rol;
                $estado = $fila->Estado_U;
            }
            if ($estado == 'ACTIVO') {
                $valor = 1;
                $cookie = array('id' => $id, 'rut' => $rut, 'login' => $login, 'clave' => $clave, 'tipo' => $tipo, 'esta_logueado' => TRUE);
            }
        }
        $this->session->set_userdata($cookie);
        echo json_encode(array("valor" => $valor,
            "id" => $id,
            "login" => $login,
            "clave" => $clave,
            "tipo" => $tipo
        ));
    }

    function cerrar_sesion() {
        $this->session->sess_destroy();
    }   


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */