<?php

App::uses('AppController', 'Controller');

class MezaninosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $uses = ["Work", "Product"];

	function beforeFilter() {
		$this->Auth->allow("index");
	}
	
    public function index(){
		$works = $this->Work->Find("all",["conditions" => ["Work.category_id" => 3]]);
		$products = $this->Product->Find("all",["conditions" => ["Product.category_id" => 3]]);
        $this->set("description","Mezaninos");
		$this->set(compact("works", "products"));
    }

}



