<?php

App::uses('AppController', 'Controller');

class ContactsController extends AppController {
    //public $components = array('RequestHandler'); 
    public $helpers = array('Html', 'Form');
    public $components = array("Email");
    
	function beforeFilter() {
		$this->Auth->allow("index","sendmail");
	}
	
    public function index(){

        $this->set("description","Contato");
    }

    public function sendmail($dados = null){
		$this->layout = null;
        
        //debug($dados);die;
        
		if($this->request->is("post")){
			$Email = new CakeEmail();
    	
    	$Email->config('smtpUnimetal')
          ->emailFormat('html')
          ->from("sistema@emntec.com.br")              
          ->to("contato@emntec.com.br")
          ->subject("Unimetal - Contato")
          ->bcc("felipe.makeit@hotmail.com");

      $msg = "Solicitação de Contanto feita por: ".$this->request->data["Contacts"]["name"]."<br />"
      ."Email : ".$this->request->data["Contacts"]["email"]."<br />"
      ."Assunto: ".$this->request->data["Contacts"]["sub"]."<br />"
      ."Mensagem: ".$this->request->data["Contacts"]["message"]."<br />";   

      if($Email->send($msg)){
				$this->Session->setFlash(__("Solicitação de Contato enviada com sucesso! Em breve entraremos em contato! Obrigado."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      } else {
      	$this->Session->setFlash(__("Ops! Ocorreu um erro no envio!. Tente novamente."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      }

		}
	}

}




