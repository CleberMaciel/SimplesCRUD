<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function inserir($p) {
        return $this->db->insert('pessoas', $p);
    }

    function deletar($id) {
        $this->db->where('id', $id);
        return $this->db->delete('pessoas');
    }

    function listarPessoas() {
        $lista = $this->db->get('pessoas');
        return $lista->result();
    }

}
