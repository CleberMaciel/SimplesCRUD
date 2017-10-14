<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Pessoa_model', 'model');
    }

    public function index() {
        $this->load->view('template/header');
        $data['titulo'] = "Cadastro de Pessoas";
        $data['pessoas'] = $this->model->listarPessoas();
        $this->load->view('pessoa', $data);
        $this->load->view('template/footer');
    }

    function inserir() {
        /* Recebe os dados do formulário (visão) */
        $data['nome'] = $this->input->post('nome');
        $data['sobrenome'] = $this->input->post('sobrenome');

        /* Chama a função inserir do modelo */
        $result = $this->model->inserir($data);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

    function excluir($id) {
        $result = $this->model->deletar($id);
        if ($result == true) {
            $this->session->set_flashdata('true', 'msg');
            redirect('pessoa');
        } else {
            $this->session->set_flashdata('err', 'msg');
            redirect('pessoa');
        }
    }

}
