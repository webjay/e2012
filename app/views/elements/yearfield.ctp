<?php

	$options = array(
		'dateFormat' => 'Y',
		'minYear' => date('Y') - 1,
		'maxYear' => 2012,
		'empty' => false
	);
	
	$selected = empty($this->data['Target'][$id.'-year']) ? date('Y') : $this->data['Target'][$id.'-year'];

	e($form->label($id.'-year', 'Årstal').'<br />');

	e($form->year($id.'-year', date('Y') - 1, 2012, $selected));

?>