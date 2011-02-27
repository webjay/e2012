<?php

	class Area extends AppModel {

		var $hasMany = array('Target');
		var $hasAndBelongsToMany = array( 
			'Municipality'
		);
		
		var $actsAs = array('Containable');

		// var $validate = array(
		// 	'name' => array(
		// 		'unique' => array(
		// 			'rule' => 'isUnique',
		// 			'message' => 'Området findes'
		// 		)
		// 	)
		// );

		public $ids = array();
		
		public function afterSave () {
			$this->ids[] = $this->id;
		}
		
		public function assignids ($data) {
			if (empty($data)) {
				return null;
			}
			// get areas names
			$areas = Set::classicExtract($data, '{n}.name');
			// find existing areas
			$existing = $this->find('list', array(
				'conditions' => array('name' => $areas)
			));
			// assign ids to existing areas
			foreach ($existing as $id => $area) {
				$key = array_search($area, $areas);
				$data[$key]['id'] = $id;
			}
			return $data;
		}

	}

?>