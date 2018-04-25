<?php

App::uses('AppController', 'Controller');
class EstruturasController extends AppController {
  public $uses = ["Product", "Work"]; 


  function beforeFilter() {
		$this->Auth->allow("index");
  }
  

  public function index(){
    $works = $this->Work->find("all", ["conditions" => ["Work.category_id" => 4] ] );
    $products = $this->Product->find("all", ["conditions" => ["Product.category_id" => 4] ] );
    $this->set(compact("works", "products"));
    $this->set("description","Estruturas Metálicas");
  }

}