<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {
    public $components = array('RequestHandler'); 
	public $helpers = array('Html', 'Form');
    public $uses = ["Product", "Work"];

	function beforeFilter() {
		$this->Auth->allow("index","galeria");
	}
	
    public function index(){

        $products = $this->Product->find("all", ["limit" => 10]);
        $works = $this->Work->find("all", ["limit" => 10]);

        $this->set(compact("products", "works"));
        $this->set("description","Home");

    }

    public function galeria(){

        $this->set("description","Obras Realizadas");
    }
}




