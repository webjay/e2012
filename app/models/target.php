<?php

	class Target extends AppModel {
		
		var $actsAs = array('Digirate');

		var $belongsTo = array(
			'Municipality', 
			'Area', 
			'User' => array(
				'fields' => array('User.id', 'User.municipality_id')
			)
		);

	    var $validate = array(
			'user_id' => array('rule' => 'numeric', 'required' => true, 'message' => 'Brugerdata mangler'),
			'municipality_id' => array('rule' => 'numeric', 'required' => true, 'message' => 'Kommune id mangler'),
			'visitors' => array('rule' => 'numeric', 'required' => true, 'message' => 'Dette felt skal være et tal'),
			'visitors-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'selfservice' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'selfservice-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'transactionsdone' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'transactionsdone-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'callin' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'callin-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'callout' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'callout-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'emailin' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'emailin-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'emailout' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'emailout-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'requests' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'requests-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'requestscitizenservice' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'requestscitizenservice-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'sms' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'sms-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'lettersin' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'lettersin-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives'),
			'lettersout' => array('rule' => 'numeric', 'message' => 'Dette felt skal være et tal'),
			'lettersout-period' => array('rule' => 'numeric', 'message' => 'Dette felt skal angives')
		);
		
		public function connection ($userid) {
			return $this->User->find('first', array(
				'conditions' => array(
					'User.id' => $userid
				),
				'contain' => array(
					'Municipality' => array(
						'Area', 
						'Target' => array(
							'order' => 'Target.id DESC',
							'limit' => 1
						)
					)
				)
			));
		}
		
	}

?>