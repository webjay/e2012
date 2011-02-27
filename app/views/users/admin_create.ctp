<?php
	$session->flash();
	$session->flash('auth');
	e($form->create('User', array('action' => 'create')));
	e($form->input('User.email'));
	e($form->input('User.password'));
	e($form->end('Opret bruger'));
?>