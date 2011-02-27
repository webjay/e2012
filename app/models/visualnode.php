<?php

	class Visualnode extends AppModel {
		
		var $belongsTo = array(
			'Visual' => array(
				'foreignKey' => 'visual_id'
			),
			'Municipality'
		);

		var $validate = array(
			'name' => array(
				'rule1' => array(
					'rule' => 'notEmpty',
					'message' => 'Dette felt skal udfyldes'
				)
			),
			'val' => array(
				'rule1' => array(
					'rule' => 'numeric',
					'message' => 'Dette felt skal være et tal'
				)
			)
		);

		var $actsAs = array('Containable');
		
	}

?>