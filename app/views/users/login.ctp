<div class="box span-8">
<?php
	e($session->flash());
	e($session->flash('auth'));
	e($form->create('User', array('action' => 'login')));
	e($form->input('User.email', array('autofocus' => '')));
	e($form->input('User.password', array('label' => 'Adgangskode')));
	e($form->end('Logind'));
?>
</div>

<p class="prepend-top clear">
	<a href="/users/passwd">Bestil nyt kodeord</a>
</p>