<?php

	class Process extends AppModel {
		
		var $actsAs = array('Digirate', 'Containable');

		var $belongsTo = array(
			'Municipality'
		);

		//'channelstrategy_url' => array('url', true),
	    var $validate = array(
			'channelstrategy' => 'numeric',
			'docmethod' => 'numeric',
			'organisation' => 'numeric',
			'organisation_person' => 'email',
			'ambassadors' => 'numeric'
		);
		
	}

?>