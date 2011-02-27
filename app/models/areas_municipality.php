<?php

class AreasMunicipality extends AppModel { 

	var $belongsTo = array( 
		'Area', 
		'Municipality'
	);
	
	var $actsAs = array('Containable');

	var $validate = array(
		'area_id' => array(
			'rule' => 'notEmpty',
			'required' => true
		),
		'municipality_id' => array(
			'rule' => 'notEmpty',
			'required' => true
		)
	);

}

?>