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
		'År',
		'Kommune',
		'Digitaliseringsområde',
		'Bruger'
	);
	$csv->addRow($titles);
	
	$blacklist = array();

	if (empty($output['Target'])) {
		foreach ($output as $munip) {
			if (empty($munip['Target'])) {
				continue;
			}
			foreach ($munip['Target'] as $target) {
				if (!$all) {
					if (isset($blacklist[$munip['Municipality']['id']][$target['area_id']])) {
						continue;
					} else {
						$blacklist[$munip['Municipality']['id']][$target['area_id']] = true;
					}
				}
				$target['municipality'] = $munip['Municipality']['name'];
				$target['area'] = isset($areas[$target['area_id']]) ? $areas[$target['area_id']] : '';
				$target['user'] = isset($users[$target['user_id']]) ? $users[$target['user_id']] : '';
				$csv->addRow($target);
			}
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