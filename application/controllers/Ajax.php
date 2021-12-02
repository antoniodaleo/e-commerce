<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function __construct(){

        parent:: __construct(); 
    }

    public function index(){
        $this->form_validation->set_rules('cep', 'CEP destino', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('produto_id', 'Produto ID', 'trim|required');

        $retorno = array(); 

        if($this->form_validation->run()){
            //sucesso
            $cep_destino = str_replace('-', '' , $this->input->post('cep')); 

            $url_endereco = 'https://viacep.com.br/ws/' ; 
            $url_endereco .= $cep_destino; 
            $url_endereco .= '/json/';


            $curl = curl_init(); 
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($curl, CURLOPT_URL, $url_endereco); 

            $resultado = curl_exec($curl); 

            $resultado = json_decode($resultado); 

            if(isset($resultado->erro)){
                $retorno['erro'] = 3; 
                $retorno['mensagem'] = 'Não encontramos CEP em nossa base de dados'; 
                //$retorno['retorno_endereco'] ='Não encontramos CEP em nossa base de dados'; 

            }else{

                $retorno['erro'] = 0; 
                $retorno['mensagem'] = 'Sucesso'; 
                $retorno['retorno_endereco'] = $resultado; 
    
            }


            
        }else{
            //Erro de validacao
            $retorno['erro'] = 5; 
            $retorno['mensagem'] = validation_errors();  
        
        
        }

        echo json_encode($retorno); 

    }



}