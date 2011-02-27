<?php

	function styleId () {}

	Configure::write('debug', 1);

	debug($munips);
	
	//e($html->nestedList($munips[0]['Municipality']['areas']));

	// foreach ($munips as $munip) {
	// 	e($this->element('kmlstyle', array(
	// 		'id' => styleId($munip['Municipality']['name']),
	// 		'kmldomid' => styleId($munip['Municipality']['kmldomid']),
	// 		'population' => $munip['Municipality']['population'],
	// 		'digirate' => $munip['Municipality']['digirate'],
	// 		'polyColor' => $munip['Municipality']['polyColor'],
	// 		'name' => $munip['Municipality']['name'],
	// 		'strategy' => $munip['Municipality']['strategy'],
	// 		'areas' => $munip['Municipality']['areas']
	// 	)));
	// }

?>