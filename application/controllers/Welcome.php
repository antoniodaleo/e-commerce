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
      );

      //echo '<pre>';
      //print_r($data['produtos_destaques']);
      //exit();

      $this->load->view('web/layout/header',$data);
      $this->load->view('web/loja');
      $this->load->view('web/layout/footer');
    }


    public function enviar(){
      $connect = new PDO("mysql:host=localhost;dbname=db_comunidade", "root", "");

      $data = [
        'email_descricao' => $_POST["email_descricao"],
      ];

      $stmt = $connect->prepare('INSERT INTO email (email_descricao) values (:email_descricao)');

        try{
          $connect->beginTransaction();
          $stmt->execute($data);
          $connect->commit();
          echo 'Registro salvo com sucesso';
        }catch (Exception $e) {
          $connect->rollback();
          throw $e;
        }
    }
}
