<?php

	// html
	
	e($this->element('formtabs', array('mid' => $mun['Municipality']['id'])));
	
	e($html->tag('h2', $title_for_layout));

	e($session->flash());

	e($form->create('Process', array('url' => '/data/'.$this->action)));

	e('<fieldset>');
	e('<legend>Kanalstrategi</legend>');
	e('<p>Min kommune har en eksplicit kanalstrategi, med mål for prioriteringen af de effektive og digitale kanaler. Strategien understøttes af implementeringsaktiviteter, og der følges op på, om målene nås.</p>');
	e($form->input('channelstrategy', array(
		'type' => 'radio',
		'options' => array(
			2 => 'Ja', 
			0 => 'Nej', 
			1 => 'På vej'
		),
		'legend' => false,
		'fieldset' => false
	)));
	e($form->input('channelstrategy_url', array(
		'label' => 'Kanalstrategi web adresse'
	)));
	e('</fieldset>');

	e('<fieldset>');
	e('<legend>Dokumentationsmetode</legend>');
	e('<p>Min kommune anvender den fælleskommunale e2012-dokumentationsmetode, til kortlægning af kommunens digitale performance og offentliggør resultaterne på det online digitale landkort, til gavn for videndeling og udbredelse af succeser til hele landet.</p>');
	e($form->input('docmethod', array(
		'type' => 'radio',
		'options' => array(
			2 => 'Ja', 
			0 => 'Nej'
		),
		'legend' => false,
		'fieldset' => false
	)));
	e('</fieldset>');

	e('<fieldset>');
	e('<legend>Organisation</legend>');
	e('<p>Min kommune har klart placeret ansvaret for realiseringen af e2012-visionen, fx i en styregruppe eller hos en projektleder.</p>');
	e($form->input('organisation', array(
		'type' => 'radio',
		'options' => array(
			2 => 'Ja', 
			0 => 'Nej'
		),
		'legend' => false,
		'fieldset' => false
	)));
	e($form->input('organisation_person', array(
		'label' => 'Angiv kontaktpersonens mailadresse'
	)));
	e('</fieldset>');

	e('<fieldset>');
	e('<legend>Digitale ambassadører</legend>');
	e('<p>Vi arbejder med kompetenceudvikling af vores frontmedarbejdere i eks. borgerservice, som skal sikre at alle frontmedarbejdere kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt.</p>');
	e($form->input('ambassadors', array(
		'type' => 'radio',
		'options' => array(
			2 => 'Ja', 
			0 => 'Nej', 
			1 => 'På vej'
		),
		'legend' => false,
		'fieldset' => false
	)));
	e('</fieldset>');

	e($form->end('Gem'));
?>