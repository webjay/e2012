<?php

	$titles = array(
		'Id',
		'Oprettet',
		'Ændret',
		'Bruger Id',
		'Kommune Id',
		'Digitaliseringsområde Id',
		'Hjemmesidebesøg',
		'Periode',
		'År',
		'Selvbetjening',
		'Periode',
		'År',
		'selvbetjeningstransaktioner',
		'Periode',
		'År',
		'Samlet antal indgående kald',
		'Periode',
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

	if (empty($output['Target'])) {
		foreach ($output as $munip) {
			$csv->addRow($munip['Target']);
		}
	} else {
		foreach ($output['Target'] as $target) {
			$values = array_values($target);
			$csv->addRow($values);
		}
	}
	
	$csv->setFilename($filename);

	echo($csv->render());

?>