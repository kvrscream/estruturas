<?php 
App::uses('AuthComponent', 'Controller/Component');
class Product extends AppModel{
	public $name = "Product";


	public $belongsTo = array(
		"Category" => array(
			"className" => "category",
			"foreignKey" => "category_id"
		)
	);

	public $Validate = array(
		'name' => array(
			'required' => array(
        'rule' => array('notEmpty'),
        'message' => 'O nome é obrigatório'
      )  
		),
		'description' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'message' => 'A descrição é obrigatória'
			)		
        )
	);

}