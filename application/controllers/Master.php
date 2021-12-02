<?php 
defined('BASEPATH') or exit('No direct script access allowed'); 

class Master extends CI_Controller{

    public function __construct()
    {
        parent::__construct(); 
    }


    public function index($categoria_pai_meta_link = null){

        if(!$categoria_pai_meta_link || !$master = $this->core_model->get_by_id('categorias_pai', array('categoria_pai_meta_link' => $categoria_pai_meta_link))){
            //echo 'Hai provato'; 
            redirect('/'); 
        }else{
           
            $data = array(
                'titulo' => 'Produtos de categoria'.$master->categoria_pai_nome, 
                'categoria' => $master->categoria_pai_nome, 
                'produtos' => $this->produtos_model->get_all_by(array('categoria_pai_meta_link'=> $categoria_pai_meta_link)),

            );

          
            $this->load->view('web/layout/header',$data);
            $this->load->view('web/master');
            $this->load->view('web/layout/footer');

        }


    }


}