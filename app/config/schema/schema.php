<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2011-04-01 22:04:55 : 1301691595*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $areas = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'official' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'official' => array('column' => 'official', 'unique' => 0), 'name' => array('column' => 'name', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $areas_municipalities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'am' => array('column' => array('area_id', 'municipality_id'), 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $criterias = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'visual_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'criteria' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'color' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 6, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'visual_id' => array('column' => 'visual_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $groups = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $municipalities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'kmldomid' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'population' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $processes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'channelstrategy' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'channelstrategy_url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'docmethod' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'organisation' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'organisation_person' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ambassadors' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 2),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $targets = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'visitors' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'visitors-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'visitors-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'selfservice' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'selfservice-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'selfservice-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'transactionsdone' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'transactionsdone-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'transactionsdone-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callin' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callin-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callin-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callout' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callout-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callout-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callcitizenservice' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callcitizenservice-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'callcitizenservice-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailin' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailin-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailin-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailout' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailout-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'emailout-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requests' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requests-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requests-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requestscitizenservice' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requestscitizenservice-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'requestscitizenservice-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'sms' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'sms-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'sms-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersin' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersin-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersin-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersout' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersout-period' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'lettersout-year' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admin' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'ticket' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'email' => array('column' => 'email', 'unique' => 1), 'login' => array('column' => array('email', 'password'), 'unique' => 1), 'ticket' => array('column' => 'ticket', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $visualnodes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'visual_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'val' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'visual_id' => array('column' => 'visual_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
	var $visuals = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'interval' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'term' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'url' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'group_id' => array('column' => 'group_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);
}
?>