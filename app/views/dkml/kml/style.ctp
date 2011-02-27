<?php

	function styleId ($name) {
		$find = array('æ', 'ø', 'å', 'Æ', 'Ø', 'Å', '-');
		$replace = array('ae', 'oe', 'aa', 'ae', 'oe', 'aa', '');
		$name = str_replace($find, $replace, $name);
		$name = low($name);
		return $name;
	}
	
	function yesno ($val) {
		switch ($val) {
			case 1:
				return 'På vej';
				break;
			case 2:
				return 'Ja';
				break;
			default:
			case 0:
				return 'Nej';
				break;
		}
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
		e($this->element('kmlstyle', array(
			'id' => styleId($munip['Municipality']['name']),
			'kmldomid' => styleId($munip['Municipality']['kmldomid']),
			'population' => $munip['Municipality']['population'],
			'digirate' => $munip['Municipality']['digirate'],
			'polyColor' => $munip['Municipality']['polyColor'],
			'name' => $munip['Municipality']['name'],
			'strategy' => $munip['Municipality']['strategy'],
			'areas' => $munip['Municipality']['areas'],
			'munip' => $munip
		)));
	}
	
	e($xml->closeElem());
	e("\n");

	e('</kml>');

?>