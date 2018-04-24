<?php 
App::uses('AuthComponent', 'Controller/Component');
class Category extends AppModel{
	public $name = "Category";

	public $Validate = array(
            'name' => array(
                'required' => array(
            'rule' => array('notEmpty'),
            'message' => 'A Categoria deve ser informada'
            )  
		)
	);


}