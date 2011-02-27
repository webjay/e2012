<?php

	class Visual extends AppModel {

		var $belongsTo = array('Group');
		var $hasMany = array('Criteria', 'Visualnode');
		var $actsAs = array('Containable');

		var $validate = array(
			'name' => array(
				'rule1' => array(
					'rule' => 'notEmpty',
					'message' => 'Dette felt skal udfyldes'
				)
			)
		);

	}

?>