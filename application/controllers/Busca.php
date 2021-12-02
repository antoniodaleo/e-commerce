<?php 
defined('BASEPATH') OR Exit('No direct script access allowed'); 

class Busca extends CI_Controller { 

    public function __construct()
    {
        parent:: __construct();
        
    }

    public function index(){

        $busca = html_escape($this->input->post('busca')); 

        $data = array(
            'titulo' => 'Busca pelo produto'. (!empty($busca) ? $busca : 'Nenhum termo foi digitado' ), 
            'termo_digitado' => (!empty($busca) ? $busca : 'Nenhum termo foi digitado'), 

        );

        if($busca){
            if($produto = $this->produtos_model->get_all_by_busca($busca)){
                $data['produto'] = $produto; 
            }
        }

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/busca');
        $this->load->view('web/layout/footer');

    }
    



}