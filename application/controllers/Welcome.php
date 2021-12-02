<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
    
      parent::__construct(); 
      $this->load->helper('text'); 

    }
    
      
    


    public function index(){

      $sistema = info_header_footer(); 

      $data = array(
        'titulo' => 'Seja muito bem vindo(a) á '.$sistema->sistema_nome_fantasia,
        'produtos_destaques' => $this->loja_model->get_produtos_destaques($sistema->sistema_produtos_destaques),
        'produtos_cachorros' => $this->loja_model->get_produtos_cachorro(), 
        'acessorio_cachorro'=> $this->loja_model->get_acessorio_cachorro(),  
        'higiene_cachorro'=> $this->loja_model->get_higiene_cachorro(),
        'acessorio_gato'=> $this->loja_model->get_acessorio_gato(),  
      );

      //echo '<pre>';
      //print_r($data['acessorio_cachorro']);
      //exit();

      $this->load->view('web/layout/header',$data);
      $this->load->view('web/loja');
      $this->load->view('web/layout/footer');
    }


    
}
