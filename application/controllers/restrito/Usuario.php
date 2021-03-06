<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct(); 
    
        //Esiste uma sessao
        if(!$this->ion_auth->logged_in()){
			redirect('restrito/login'); 
		}
	}
	
	public function index(){

        $data = array(

            'titulo' => 'Usuario cadastrados',

            'styles' => array(
                'bundles/datatables/datatables.min.css',
                'bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css',


            ),

            'scripts' => array(
                'bundles/datatables/datatables.min.js',
                'bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js',
                'bundles/jquery-ui/jquery-ui.min.js',
                'js/page/datatables.js',
            ),
            'usuarios' => $this->ion_auth->users()->result(),

        ); 

        /*echo '<pre>'; 
        print_r($data); 
        exit(); */
	
		$this->load->view('restrito/layout/header',  $data);
		$this->load->view('restrito/usuarios/index');
		$this->load->view('restrito/layout/footer');
    }

    public function core($usuario_id = NULL){

        $usuario_id = (int) $usuario_id; 

        if(!$usuario_id  ){
            //CADASTRAR
            $this->form_validation->set_rules('first_name','Nome','trim|required|min_length[4]|max_length[45]'); 
            $this->form_validation->set_rules('last_name','Sobrenome','trim|required|min_length[4]|max_length[45]'); 
            $this->form_validation->set_rules('email','E-mail','trim|required|min_length[4]|max_length[100]|valid_email|callback_valida_email'); 
            $this->form_validation->set_rules('username','Usuario','trim|required|min_length[4]|max_length[50]|callback_valida_usuario'); 
            $this->form_validation->set_rules('password','senha','trim|required|min_length[4]|max_length[200]'); 
            $this->form_validation->set_rules('confirma','confirma','trim|required|matches[password]'); 

            if($this->form_validation->run()){ 
                
                $username = $this->input->post('username'); 
                $password = $this->input->post('password');
                $email = $this->input->post('email'); 
                $additional_data = array(
                    'first_name' => $this->input->post('first_name'), 
                    'last_name' => $this->input->post('last_name'), 
                    'active' => $this->input->post('active'), 
                );

                $group = array($this->input->post('perfil'));  

                
                if( $this->ion_auth->register($username, $password, $email, $additional_data, $group)){
                    $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
                }else{ 

                    $this->session->set_flashdata('erro', $this->ion_auth->errors());

                }

                redirect('restrito/usuario');
               

            }else{

                //Erro de valida????o
                $data = array(
                    'titulo' => 'Cadastrar usuario',
                    'grupos' => $this->ion_auth->groups()->result(),
                );

                $this->load->view('restrito/layout/header',  $data);
                $this->load->view('restrito/usuarios/core');
                $this->load->view('restrito/layout/footer');

            }
           
        }else{

            if(!$usuario =  $this->ion_auth->user($usuario_id)->row()){

                $this->session->set_flashdata('erro','Esse Usuario n??o existe'); 
                
                redirect('restrito/usuario');
            }else{
                
                //Edita usuario
                $this->form_validation->set_rules('first_name','Nome','trim|required|min_length[4]|max_length[45]'); 
                $this->form_validation->set_rules('last_name','Sobrenome','trim|required|min_length[4]|max_length[45]'); 
                $this->form_validation->set_rules('email','E-mail','trim|required|min_length[4]|max_length[100]|valid_email|callback_valida_email'); 
                $this->form_validation->set_rules('username','Usuario','trim|required|min_length[4]|max_length[50]|callback_valida_usuario'); 
                $this->form_validation->set_rules('password','senha','trim|min_length[4]|max_length[200]'); 
                $this->form_validation->set_rules('confirma','confirma','trim|matches[password]'); 

                if($this->form_validation->run()){
                   

                    $data = elements(
                            array(
                                'first_name',
                                'last_name',
                                'email',
                                'username',
                                'password',      
                                'active',   
                            ), $this->input->post()
                    ); 


                    $password= $this->input->post('password'); 

                    /* Non atualiza a senha se a mesma nao for passada */
                    if(!$password){
                        unset($data['password']); 
                    }

                    /* Sanitizando o data */
                    $data = html_escape($data); 

                    if($this->ion_auth->update($usuario_id, $data)){

                        $perfil = (int) $this->input->post('perfil'); 

                        if($perfil){
                            $this->ion_auth->remove_from_group(null, $usuario_id); 
                            $this->ion_auth->add_to_group($perfil, $usuario_id); 
                        }

                        $this->session->set_flashdata('sucesso', 'Dados salvos com sucesso');
                        
                    } else{
                        $this->session->set_flashdata('erro', $this->ion_auth->errors());
                       
                    }

                    redirect('restrito/usuario'); 
                  
                }else{

                    $data = array(
                        'titulo' => 'Editar usuario', 
                        'usuario' => $usuario,
    
                        'perfil' => $this->ion_auth->get_users_groups($usuario_id)->row(),
                        'grupos' => $this->ion_auth->groups()->result(),
                    );
    
                    $this->load->view('restrito/layout/header',  $data);
                    $this->load->view('restrito/usuarios/core');
                    $this->load->view('restrito/layout/footer');

                }


              
            }

        }


    }

    public function delete($usuario_id = null){

        $usuario_id = (int) $usuario_id; 


        if(!$usuario_id || !$this->ion_auth->user($usuario_id)->row()){
            $this->session->set_flashdata('erro', 'O Usuario n??o foi encontrado'); 
            redirect('restrict/usuario'); 
        }else{

            if($this->ion_auth->is_admin($usuario_id)){
                $this->session->set_flashdata('erro', 'N??o ?? permitido excluir um usuario Administrador'); 
                redirect('restrito/usuario'); 
            }

            if($this->ion_auth->delete_user($usuario_id)){
                $this->session->set_flashdata('sucesso', 'Usuario excluido com sucesso!'); 
            }else{
                $this->session->set_flashdata('erro', $this->ion_auth->errors());
            }

            redirect('restrito/usuario');
        }


    }

    public function valida_email($email){

        $usuario_id = $this->input->post('usuario_id'); 

        if(!$usuario_id){
            //cadastrando
            if($this->core_model->get_by_id('users', array('email' =>$email ))){
                $this->form_validation->set_message('valida_email','Esse email j?? existe');
                return false; 
            }else{
                return true;          
            }

        }else{
            //Editando
            if($this->core_model->get_by_id('users', array('email' =>$email, 'id !=' => $usuario_id ))){
                $this->form_validation->set_message('valida_email','Esse email j?? existe');
    
                return false; 
    
            }else{
    
                return true;          
            }

        }

        

    }

    public function valida_usuario($username){

        $usuario_id = $this->input->post('usuario_id'); 

        if(!$usuario_id){
            //cadastrando
            if($this->core_model->get_by_id('users', array('username' =>$username ))){
                $this->form_validation->set_message('email_check','Esse usuario j?? existe');
                return false; 
            }else{
                return true;          
            }

        }else{
            //Editando
            if($this->core_model->get_by_id('users', array('username' =>$username, 'id !=' => $usuario_id ))){
                $this->form_validation->set_message('email_check','Esse usuario j?? existe');
    
                return false; 
    
            }else{
    
                return true;          
            }

        }

        

    }





}
