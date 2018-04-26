<?php

App::uses('AppController', 'Controller');

class PortoesController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = ["Work", "Product"];

	function beforeFilter() {
		$this->Auth->allow("index");
	}
	
    public function index(){
		$works = $this->Work->Find("all",["conditions" => ["Work.category_id" => 2]]);
		$products = $this->Product->Find("all",["conditions" => ["Product.category_id" => 2]]);
        $this->set("description","Portoes");
		$this->set(compact("works", "products"));
    }

}



