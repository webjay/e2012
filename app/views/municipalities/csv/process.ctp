<?php
	
	$blacklist = array();

	if (empty($output['Process'])) {
		$titles = array_keys($output[0]['Process'][0]);
		$titles[] = 'Municipality';
		$csv->addRow($titles);
		foreach ($output as $munip) {
			if (empty($munip['Process'])) {
				continue;
			}
			foreach ($munip['Process'] as $process) {
				if (!$all) {
					if (isset($blacklist[$munip['Municipality']['id']][$process['municipality_id']])) {
						continue;
					} else {
						$blacklist[$munip['Municipality']['id']][$process['municipality_id']] = true;
					}
				}
				$process['municipality'] = $munip['Municipality']['name'];
				$csv->addRow($process);
			}
		}
	} else {
		$titles = array_keys($output['Process'][0]);
		$titles[] = 'Municipality';
		$csv->addRow($titles);
		foreach ($output['Process'] as $process) {
			$process['municipality'] = $output['Municipality']['name'];
			$csv->addRow($process);
		}
	}
	
	$csv->setFilename($filename);

	echo($csv->render());

?>