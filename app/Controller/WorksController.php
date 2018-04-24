<?php

App::uses('AppController', 'Controller');
class WorksController extends AppController {
	public $uses = ["Work", "Category"];


	public function index(){
		$this->layout = "admin";
		$dados = $this->Work->find("all");
		$this->set(compact("dados"));
	}


	public function add(){
		$this->layout = "admin";

		if($this->request->is("post")){
			if($this->request->data['Work']['image']["tmp_name"] != null && !empty($this->request->data['Work']['image']["tmp_name"])){
                move_uploaded_file(
                  $this->request->data['Work']['image']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Work']['image']['name'])
                );

                $this->request->data["Work"]["image"] = $this->request->data['Work']['image']['name'];
            } else {
                $this->request->data["Work"]["image"] = "";
            }

            $this->Work->Create();

           if($this->Work->save($this->request->data)){
           		$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));

           		$this->redirect(["action" => "edit/".$this->Works->id]);
           } else {
           		$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar. Por favor tente novamente!"), "default", array("class" => "alert alert-danger"));
           }

		}

		$categories = $this->Category->find("list");
		$this->set("form_action", "add");
		$this->set(compact("categories"));
	}

	public function edit($id=null){
		$this->layout = "admin";
		$this->Work->id = $id;

		$dados = $dados = $this->Work->read();

		if($_POST){
			if($this->request->data['Work']['image']["tmp_name"] != null && !empty($this->request->data['Work']['image']["tmp_name"])){

				unlink(WWW_ROOT.'/img/uploads/'.$dados["Work"]["image"]);

                move_uploaded_file(
                  $this->request->data['Work']['image']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Work']['image']['name'])
                );

                $this->request->data["Work"]["image"] = $this->request->data['Work']['image']['name'];
            } else {
                $this->request->data["Work"]["image"] = "";
            }

           if($this->Work->save($this->request->data)){
           		$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
           } else {
           		$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar. Por favor tente novamente!"), "default", array("class" => "alert alert-danger"));
           }

		}

		$categories = $this->Category->find("list");
		$this->request->data = $this->Work->read();
		$this->set("form_action", "edit/".$this->Work->id);
		$this->set(compact("categories", "id"));

		$this->render("add");
	}


	public function delete($id=null){
		$this->Work->id = $id;
		$dados = $this->Work->read();

		if($dados["Work"]["image"] != null){
			unlink(WWW_ROOT.'/img/uploads/'.$dados["Work"]["image"]);
		}

		if($this->Work->delete($id)){
			$this->redirect(["action" => "index"]);
		}
	}


	public function obras($category_id=null){
		$works = $this->Work->find("all", ["conditions" =>["category_id" => $category_id] ]);
		$this->set(compact("works"));
		$this->set("description", "Obras Realizadas");
	}

	function beforeFilter() {
		$this->Auth->allow("obras");
	}

}