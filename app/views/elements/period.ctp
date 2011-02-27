<?php

e($html->tag('label', 'Opgørelsesperiode'));
e($form->input($id.'-period', array(
	'type' => 'radio',
	'options' => array(
		1 => '1 uge', 
		'4.33' => '1 måned', 
		13 => '3 måneder',
		26 => '6 måneder',
		52 => '1 år'
	),
	'legend' => false,
	'class' => 'period'
)));

?>