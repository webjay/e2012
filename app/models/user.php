<?php

	class User extends AppModel {
		
		var $displayField = 'email';

		var $belongsTo = array('Municipality');
		var $hasMany = array('Target');
		
		var $actsAs = array('Containable');
		
	    var $validate = array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Indtast valid E-Mail adresse'
			),
			'password' => array(
				'rule' => array('minLength', '6'),
				'message' => 'Minimum 6 karakterer'
			)
		);

	}

?>