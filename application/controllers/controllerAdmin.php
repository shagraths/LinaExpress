<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controllerAdmin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('modelo');
    }

    
//TODO SECTOR
    function cargar_ciudades() {
        $datos['ciudades'] = $this->modelo->consultar_ciudad_activos()->result();
        $this->load->view('ADMINISTRADOR/CB/combo_ciudad', $datos);
    }

    function guardar_sector() {
        $s_c = $this->input->post("s_c");        
        $nombre = $this->input->post("nombre");        
        $obs = $this->input->post("obs");        
        $estado = $this->input->post("estado");        
        $valor = 1;
        if ($this->modelo->guardar_sector(strtoupper($s_c), strtoupper($nombre), strtoupper($obs), strtoupper($estado)) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function reporte_sector() {
        $data = $this->modelo->consultar_sector();
        $datos['cantidad'] = $data->num_rows();
        $datos['sectores'] = $data->result();
        $this->load->view('ADMINISTRADOR/GRILLAS/sector', $datos);
    }

    function actualizar_sector() {
        $id = $this->input->post("id");
        $s_c = $this->input->post("s_c");
        $s_c = strtoupper($s_c);
        $nombre = $this->input->post("nombre");
        $nombre = strtoupper($nombre);
        $obs = $this->input->post("obs");
        $obs = strtoupper($obs);
        $estado = $this->input->post("estado");
        $estado = strtoupper($estado);
        $valor = 1;
        if ($this->modelo->actualizar_sector($id, $s_c, $nombre, $obs, $estado) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function eliminar_sector() {
        $id = $this->input->post("id");           
        $valor = 0;     
        if ($this->modelo->eliminar_sector($id)==1) {
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor));
    }
//TODO CIUDAD
    function guardar_ciudad() {
        $tipo = $this->input->post("tipo");
        $tipo = strtoupper($tipo);
        $nombre = $this->input->post("nombre");
        $nombre = strtoupper($nombre);
        $obs = $this->input->post("obs");
        $obs = strtoupper($obs);
        $estado = $this->input->post("estado");
        $estado = strtoupper($estado);
        $valor = 1;
        if ($this->modelo->guardar_ciudad($tipo, $nombre, $obs, $estado) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function actualizar_ciudad() {
        $id = $this->input->post("id");
        $tipo = $this->input->post("tipo");
        $tipo = strtoupper($tipo);
        $nombre = $this->input->post("nombre");
        $nombre = strtoupper($nombre);
        $obs = $this->input->post("obs");
        $obs = strtoupper($obs);
        $estado = $this->input->post("estado");
        $estado = strtoupper($estado);
        $valor = 1;
        if ($this->modelo->actualizar_ciudad($id, $tipo, $nombre, $obs, $estado) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function reporte_ciudad() {
        $data = $this->modelo->consultar_ciudad();
        $datos['cantidad'] = $data->num_rows();
        $datos['ciudades'] = $data->result();
        $this->load->view('ADMINISTRADOR/GRILLAS/ciudad', $datos);
    }

    function eliminar_ciudad() {
        $valor = 0;
        $id_ciudad = $this->input->post("id_ciudad");
        if($this->modelo->eliminar_ciudad($id_ciudad)==1) {
            $valor = 1;
        }
        echo json_encode(array("valor" => $valor));        
    }

    function guardar_tipo_carta() {
        $tipo = $this->input->post("tipo");
        $tipo = strtoupper($tipo);
        $obs = $this->input->post("obs");
        $obs = strtoupper($obs);
        $estado = $this->input->post("estado");
        $estado = strtoupper($estado);
        $valor = 1;
        if ($this->modelo->guardar_tipo_carta($tipo, $obs, $estado) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }

    function actualizar_tipo_carta() {
        $id = $this->input->post("id");
        $tipo = $this->input->post("tipo");
        $tipo = strtoupper($tipo);
        $obs = $this->input->post("obs");
        $obs = strtoupper($obs);
        $estado = $this->input->post("estado");
        $estado = strtoupper($estado);
        $valor = 1;
        if ($this->modelo->actualizar_tipo_carta($id, $tipo, $obs, $estado) == 0) {
            $valor = 0;
        }
        echo json_encode(array("valor" => $valor));
    }
    function eliminar_tipo_carta(){
        $id = $this->input->post("id");
        $valor = 0;
        if ($this->modelo->eliminar_tipo_carta()==1) {
            $valor = 1;
        }
        echo json_decode(array("valor"=>$valor));
    }

    function reporte_carta() {
        $data = $this->modelo->consultar_carta();
        $datos['cantidad'] = $data->num_rows();
        $datos['cartas'] = $data->result();
        $this->load->view('ADMINISTRADOR/GRILLAS/carta', $datos);
    }

    function eliminar_carta() {
        $id_carta = $this->input->post("id_carta");
        $this->modelo->eliminar_ciudad($id_carta);
    }



}