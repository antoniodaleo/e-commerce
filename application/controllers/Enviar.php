<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enviar extends CI_Controller {

    public function __construct(){
    
   

    }
    

    public function index(){
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