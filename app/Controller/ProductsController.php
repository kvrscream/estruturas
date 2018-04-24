<?php

App::uses('AppController', 'Controller');
class ProductsController extends AppController {
	public $uses = array("Product", "Category");  
    public $components = array('RequestHandler'); 
   

    public function index(){
    	$this->layout = 'admin';

    	$dados = $this->Product->find("all");

    	$this->set(compact("dados"));
    	$this->set("description","Produtos");
    }

    public function add(){
    	$this->layout = 'admin';

    	if($this->request->is('post')){

            if($this->request->data['Product']['imageurl']["tmp_name"] != null && !empty($this->request->data['Product']['imageurl']["tmp_name"])){
                move_uploaded_file(
                  $this->request->data['Product']['imageurl']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Product']['imageurl']['name'])
                );

                $this->request->data["Product"]["imageurl"] = $this->request->data['Product']['imageurl']['name'];
            } else {
                $this->request->data["Product"]["imageurl"] = "";
            }

            if($this->request->data['Product']['imagedescription']["tmp_name"] != null && !empty($this->request->data['Product']['imagedescription']["tmp_name"])){
                move_uploaded_file(
                  $this->request->data['Product']['imagedescription']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Product']['imagedescription']['name'])
                );

                $this->request->data["Product"]["imagedescription"] = $this->request->data['Product']['imagedescription']['name'];
            } else {
                $this->request->data["Product"]["imagedescription"] = "";
            }
            
            $this->Product->validates();
    		$this->Product->create();
    		if($this->Product->save($this->request->data)){
    			$this->Session->setFlash(__("Salvo com sucesso!"), "default", array("class" => "alert alert-success"));
        		$this->redirect(["action" => "edit/".$this->Product->id]);
    		} else {
    			$this->Session->setFlash(__("Ocorreu um erro ao tentar salvar!"), "default", array("class" => "alert alert-danger"));
    		}
    	}

        $categories = $this->Category->find("list");

        $this->set(compact("categories"));
    	$this->set("form_action", "add");
    }

    public function edit($id=null){
        $this->layout = 'admin';
        $this->Product->id = $id;

        $dados = $this->Product->read();
        
        if($_POST){

            if($this->request->data['Product']['imageurl']["tmp_name"] != null){

                unlink(WWW_ROOT.'/img/uploads/'.$dados["Product"]["imageurl"]);

                move_uploaded_file(
                  $this->request->data['Product']['imageurl']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Product']['imageurl']['name'])
                );

                $this->request->data["Product"]["imageurl"] = $this->request->data['Product']['imageurl']['name'];
            } else {
                $this->request->data["Product"]["imageurl"] = "";
            }
            

            if($this->request->data['Product']['imagedescription']["tmp_name"] != null){

                unlink(WWW_ROOT.'/img/uploads/'.$dados["Product"]["imagedescription"]);

                move_uploaded_file(
                  $this->request->data['Product']['imagedescription']['tmp_name'],
                    WWW_ROOT.'/img/uploads/' . basename($this->request->data['Product']['imagedescription']['name'])
                );

                $this->request->data["Product"]["imagedescription"] = $this->request->data['Product']['imagedescription']['name'];
            } else {
                $this->request->data["Product"]["imagedescription"] = "";
            }
            

            if($this->Product->save($this->request->data)){
                $this->Session->setFlash(__("Editado com sucesso!"), "default", array("class" => "alert alert-success"));
                $this->redirect(["action" => "edit/".$id]);
            } else {
                $this->Session->setFlash(__("Ocorreu um erro ao tentar editar!"), "default", array("class" => "alert alert-danger"));
            }

        }

        $categories = $this->Category->find("list");
        $this->request->data = $this->Product->read();
        $this->set(compact("id", "categories"));
        $this->set("form_action", "edit/".$this->Product->id);
        $this->render("add");
    }

    public function delete($id=null){
        $this->Product->id = $id;
        $dados = $this->Product->read();

        if($dados["Product"]["imageurl"] != null ){
            unlink(WWW_ROOT.'/img/uploads/'.$dados["Product"]["imageurl"]);
        }

        if($dados["Product"]["imagedescription"] != null){    
            unlink(WWW_ROOT.'/img/uploads/'.$dados["Product"]["imagedescription"]);
        }

    	if($this->Product->delete($id)){
			$this->redirect("index");
		}
    }

}