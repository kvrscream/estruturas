<?php 
App::uses('AppController', 'Controller');

class DashboardController extends AppController{

	public function index(){
		$this->layout = 'admin';
	}



}