<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2010-02-23 00:02:22 : 1266884302*/
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
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'name_2' => array('column' => 'name', 'unique' => 1), 'name' => array('column' => 'name', 'unique' => 0))
	);
	var $areas_municipalities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'am' => array('column' => array('area_id', 'municipality_id'), 'unique' => 1))
	);
	var $municipalities = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'population' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
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
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'user_id' => array('column' => 'user_id', 'unique' => 0))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'key' => 'unique'),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10),
		'admin' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'ticket' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'email' => array('column' => 'email', 'unique' => 1), 'login' => array('column' => array('email', 'password'), 'unique' => 1), 'ticket' => array('column' => 'ticket', 'unique' => 0))
	);
}
?>