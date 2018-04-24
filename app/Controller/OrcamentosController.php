<?php

App::uses('AppController', 'Controller');
class OrcamentosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $components = array("Email");
	public $uses = ["Orcamento"];

  public function beforeFilter() {
      parent::beforeFilter();
      $this->Auth->allow('index', 'sendmail');
  }

	public function index(){

		$this->set("description", "Orçamento");
	}

	public function sendmail($dados = null){
		$this->layout = null;
		
		if($this->request->is("post")){
			$Email = new CakeEmail();
    	
    	$Email->config('smtpUnimetal')
          ->emailFormat('html')
          ->from("sistema@emntec.com.br")              
          ->to("contato@emntec.com.br")
          ->subject("Unimetal - Orçamentos")
          ->bcc("felipe.makeit@hotmail.com");

      $msg = "Solicitação de  Orçamento feita por: ".$this->request->data["Orcamentos"]["nome"]."<br />"
      ."Telefone : ".$this->request->data["Orcamentos"]["fone"]."<br />"
      ."Celular: ".$this->request->data["Orcamentos"]["celular"]."<br />"
      ."Categoria: ".$this->request->data["Orcamentos"]["categoria"]."<br />"
      ."CEP: ".$this->request->data["cep"]."<br />"
      ."Endereço: ".$this->request->data["Orcamentos"]["endereco"]."<br />"
      ."Número: ".$this->request->data["Orcamentos"]["numero"]."<br />"
      ."Bairro: ".$this->request->data["Orcamentos"]["bairro"]."<br />"
      ."Cidade: ".$this->request->data["Orcamentos"]["cidade"]."<br />"
      ."Estado: ".$this->request->data["Orcamentos"]["estado"]."<br />"
      ."Comprimento: ".$this->request->data["Orcamentos"]["comprimento"]."<br />"
      ."Largura: ".$this->request->data["Orcamentos"]["largura"]."<br />"
      ."Produto: ".$this->request->data["produto"]."<br />"
      ."Prioridade: ".$this->request->data["Orcamentos"]["prioridade"]."<br />"
      ."Email Contato: ".$this->request->data["Orcamentos"]["email"]."<br />"      
      ."Observações: <br />".$this->request->data["Orcamentos"]["obs"]."<br />" ;   

      if($Email->send($msg)){
				$this->Session->setFlash(__("Solicitação de Orçamento enviada com sucesso! Em breve entraremos em contato! Obrigado."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      } else {
      	$this->Session->setFlash(__("Ops! Ocorreu um erro no envio!. Tente novamente."), "default", array("class" => "alert alert-success"));
				$this->redirect(["action" => "index"]);
      }

		}
	}

}