<?php

	function styleId ($name) {
		$find = array('æ', 'ø', 'å', 'Æ', 'Ø', 'Å', '-');
		$replace = array('ae', 'oe', 'aa', 'ae', 'oe', 'aa', '');
		$name = str_replace($find, $replace, $name);
		$name = low($name);
		return $name;
	}

	e($xml->header());
	e("\n");
	
	e('<kml xmlns="http://www.opengis.net/kml/2.2">');
	e("\n");

	e($xml->elem('Document', null, null, false).'>');
	e("\n");
	e($xml->elem('name', null, array('value' => 'Styles for KML', 'cdata' => true)));
	e("\n");
	
	foreach ($munips as $munip) {
		e($this->element('vstyle', array(
			'id' => styleId($munip['name']),
			'kmldomid' => styleId($munip['kmldomid']),
			'polyColor' => $munip['polyColor'],
			'name' => $munip['name']
		)));
	}
	
	e($xml->closeElem());
	e("\n");

	e('</kml>');

?>