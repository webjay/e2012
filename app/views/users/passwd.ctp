<h2><?php e($title_for_layout); ?></h2>
<p>
	Indtast den email adresse du er registreret med herunder.
	Du vil kort tid herefter modtage en mail med instruktioner i hvordan du ændrer din adgangskode.
</p>

<div class="box span-8">
<?php
	$session->flash();
	$session->flash('auth');
	e($form->create('User', array('action' => 'passwd2')));
	e($form->input('User.email', array('autofocus' => '')));
	e($form->end('Rekvirer ny adgangskode'));
?>
</div>