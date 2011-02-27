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

	e($xml->elem('Document', null, null, false).'>');
	e($xml->elem('name', null, array('value' => 'Styles for doc.kmz', 'cdata' => true)));
	e("\n");
	
	foreach ($munips as $munip) {
		e($this->element('kmlstyle', array(
			'id' => styleId($munip['Municipality']['name']),
			'kmldomid' => styleId($munip['Municipality']['kmldomid']),
			'population' => $munip['Municipality']['population'],
			'digirate' => $munip['Municipality']['digirate'],
			'polyColor' => $munip['Municipality']['polyColor'],
			'name' => $munip['Municipality']['name']
		)));
	}
	
	e($xml->closeElem());

	e('</kml>');

?>