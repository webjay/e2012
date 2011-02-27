<h2><?php e($title_for_layout); ?></h2>
<?php
	$session->flash();
	$session->flash('auth');
	e($form->create('User', array('action' => 'passwd3')));
	e($form->input('User.ticket', array('type' => 'hidden')));
	e($form->input('User.password', array('label' => 'Adgangskode')));
	e($form->end('Gem'));
?>