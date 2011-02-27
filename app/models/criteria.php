<?php

	class Criteria extends AppModel {

		var $belongsTo = array(
			'Visual' => array(
				'foreignKey' => 'visual_id'
			)
		);
		
		var $actsAs = array('Containable');

		var $validate = array(
			'criteria' => array(
				'rule1' => array(
					'rule' => 'numeric',
					'message' => 'Dette felt skal være et tal'
				)
			),
			'color' => array(
				'rule1' => array(
					'rule' => array('between', 3, 6),
					'message' => 'Dette felt skal være en farvekode'
				)
			)
		);
		
		public $order = array('Criteria.criteria ASC');

	}

?>