<?php

	//$titles = array_keys($output['Target'][0]);
	$titles = array(
		'Id',
		'Oprettet',
		'Ændret',
		'Bruger Id',
		'Kommune Id',
		'Digitaliseringsområde Id',
		'Hjemmesidebesøg',
		'Periodee',
		'År',
		'Selvbetjening',
		'Periodee',
		'År',
		'selvbetjeningstransaktioner',
		'Periodee',
		'År',
		'Samlet antal indgående kald',
		'Periodee',
		'År',
		'Samlet antal udgående kald',
		'Periode',
		'År',
		'Samlet antal indgående kald til Borgerservice',
		'Periode',
		'År',
		'Emails ind',
		'Periode',
		'År',
		'Emails ud',
		'Periode',
		'År',
		'Fysisk fremmøde',
		'Periode',
		'År',
		'Personlige henvendelser i borgerservice',
		'Periode',
		'År',
		'Sms',
		'Periode',
		'År',
		'Breve ind',
		'Periode',
		'År',
		'Breve ud',
		'Periode',
		'År'
	);
	$csv->addRow($titles);

	foreach ($output['Target'] as $target) {
		$values = array_values($target);
		$csv->addRow($values);
	}
	
	$csv->setFilename($filename);

	e($csv->render());

?>