<?php

App::uses('AppController', 'Controller');

class MezaninosController extends AppController {
	public $helpers = array('Html', 'Form');

	function beforeFilter() {
		$this->Auth->allow("index");
	}
	
    public function index(){

        $this->set("description","Mezaninos");

    }

}



