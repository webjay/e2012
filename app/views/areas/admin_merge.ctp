<h1>Sammenfletning af digitaliseringsområder</h1>
<div class="span-15">
<p>Markér de digitaliseringsområder under taberne, som skal flettes sammen med vinderen. Taberne slettes, og de data der var associeret til dem, flyttes til vinderen.</p>
<p><i>Under taberne kan flere markeres ved at holde <code>ctrl</code> nede på PC, og på Mac bruges <code>cmd</code>.</i></p>
<?php

	e($form->create('Area'));

	e($form->input('Area.losers', array(
		'multiple' => true,
		'label' => 'Taberne',
		'options' => $areas
	)));

	e($form->input('Area.winner', array(
		'label' => 'Vinderen',
		'empty' => true,
		'options' => $areas
	)));
	
	e($session->flash());

	e($form->end('Merge'));

?>
</div>