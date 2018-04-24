<?php 
App::uses('AppController', 'Controller');

class UsersController extends AppController{
	public $helpers = array('Html', 'Form');
	public $components = array("Session", "Auth", "Paginator", "Email");
	public $uses = ["User"];


	function beforeFilter() {
		$this->Auth->allow("login", "logout","add");
	}


	public function add(){
		$this->layout = 'admin'; //Define o layout da pagina

		if($this->request->is("post")){
			$this->User->validates();
			$this->User->create();
			if($this->User->save($this->request->data)){
				$this->Session->setFlash(__("Usuário Criado com Sucesso!"), "default", array("class" => "alert alert-success"));
		        $this->redirect(["action" => "login"]);
		      } else {
		        $this->Session->setFlash(__("Usuário Não Pode Ser Criado!"), "default", array("class" => "alert alert-danger"));
		      }
			}
		$this->set("form_action", "add");
	}


	public function login(){
		$this->layout = 'auth';
		if($this->request->is("post")){
			$dados = $this->request->data;
			if($this->Auth->login()){
				$user = $this->User->find("first", ["conditions" => ["User.username" => $dados["User"]["username"] ] ]);
				$this->redirect($this->Auth->redirectUrl());
			} else {
				$this->Session->setFlash(__("Usuário ou Senha inválidos."), "default", array("class" => "alert alert-danger"));
        		$this->redirect("/users/login");
			}
		}
	}

	public function logout(){
		if($this->Auth->logout()){
			$this->redirect(["action" => "login"]);
		}
	}


}