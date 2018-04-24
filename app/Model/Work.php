<?php 
App::uses('AuthComponent', 'Controller/Component');
class Work extends AppModel{
	public $name = "Work";


	public $belongsTo = array(
		"Category" => array(
			"className" => "category",
			"foreignKey" => "category_id"
		)
	);

}