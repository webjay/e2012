<?php

	class Municipality extends AppModel {
		
		var $hasMany = array('User', 'Target', 'Process');
		var $hasAndBelongsToMany = array( 
			'Area'
		);
		
		var $actsAs = array('Containable');

	    var $validate = array(
			'name' => array(
				'rule' => 'notEmpty'
			)
		);
		var $order = 'name';

	}

?>