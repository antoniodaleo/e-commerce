<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller {

	public function __construct(){
		 parent::__construct(); 
    
         //if(!$this->ion_auth->logged_in()){
            // redirect('restrito/login'); 
         //}
        //Esiste uma sessa
    }


    public function index(){

        $data = array(

            'titulo' => 'Contato',
           
           // 'produto' => $this->produtos_model->get_all_by(array('marca_meta_link' => $marca_meta_link)),

        ); 

        $this->load->view('web/layout/header', $data);
        $this->load->view('web/contato'); 
        $this->load->view('web/layout/footer'); 


    }



}



