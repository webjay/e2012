<?php 
	
	e($this->element('formtabs', array('mid' => $mun['Municipality']['id'])));
	
	e($html->tag('h2', $title_for_layout));

	e($session->flash());
	
?>
<p>Alle kommuner skal udvælge et antal særlige digitaliseringsområder. Det er enten områder hvor I allerede har, eller planlægger at få en mulighed for digital selvbetjening, som I gerne vil have mange borgere til at bruge.</p>
<p>Et område kan eks. være “Bestil gult sundhedskort” (Læs mere på <a href="www.kl.dk/e2012">www.kl.dk/e2012</a>).</p>
<p>Du bedes nedenfor angive hvilke områder I har udvalgt i din kommune.</p>

<hr class="space" />

<div class="prepend-top append-bottom">
	<h3>Eksisterende digitaliseringsområder</h3>
	<ul><?php
		if (!empty($areas['Area'])) {
			foreach ($areas['Area'] as $area) {
				$icon = '<span class="ui-icon ui-icon-close"></span>';
				$del = $html->tag('a', $icon, array(
					'href' => '/areas_municipalities/delete/'.$mun['Municipality']['id'].'/'.$area['AreasMunicipality']['id'],
					'class' => 'quiet fg-button'
				));
				e($html->tag('li', '<span class="mr-3">'.$area['name'].'</span> '.$del));
			}
		}
	?></ul>
</div>

<hr class="space" />

<div class="span-24 append-bottom">
	<h3>Tilføj digitaliseringsområde</h3>
	<div class="span-15 append-1">
		<p>Tilføj et digitaliseringsområde ved at afkrydse det ønskede område fra listen nedenfor eller brug søgefunktionen til højre. Findes dit digitaliseringsområde ikke på listen, kan du indtaste det nederst på denne side.</p>
	</div>
	<div class="span-8 last">
		<form id="areaSearch">
			<input type="search" name="q" placeholder="Søg" maxlength="256" />
		</form>
	</div>
	<?php

	$javascript->codeBlock('load(" area.areaSearchWatch(); ");', array('inline' => false));
	

	e($form->create('Area', array('url' => '/data/'.$this->action)));
	e($form->input('AreasMunicipality.municipality_id', array('type' => 'hidden')));

	e('<div id="areas" class="span-24 append-bottom">');
	e($this->element('areas'));
	e('</div>');
	
	e($form->end());
	
	e('<hr />');

	e($form->create('Area', array('url' => '/data/areanew')));
	e($form->input('AreasMunicipality.municipality_id', array('type' => 'hidden')));

	e('<div class="span-9">');
	e('<p>Fandt du ikke jeres digitaliseringsområde kan et nyt oprettes her.</p>');
	e($form->input('Area.name', array(
		'label' => 'Digitaliseringsområde',
		'placeholder' => 'Indtast digitaliseringsområde'
	)));
	e($form->submit('Tilføj'));
	e('</div>');
	
	e($form->end());

	// autocomplete
	//'class' => 'areacomplete',
	// $html->css('/js/jqauto/styles.css', null, array(), false);
	// $javascript->link('/js/jqauto/jquery.autocomplete-min.js', false);
	// $javascript->codeBlock('jQuery(document).ready(function(){ areacomplete(); });', array('inline' => false));

	?>
</div>
