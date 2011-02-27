<?php 
 
class DigitalisHelper extends AppHelper {
	
	private $names = array(
		'visitors' => 'Antal unikke besøgende',
		'selfservice' => 'Antal påbegyndte selvbetjeningstransaktioner',
		'transactionsdone' => 'Antal gennemførte selvbetjeningstransaktioner',
		'callin' => 'Samlet antal indgående kald',
		'callout' => 'Samlet antal udgående kald',
		'emailin' => 'Antal modtagede emails',
		'emailout' => 'Antal sendte emails',
		'requests' => 'Personlige henvendelser (inklusiv borgerservice)',
		'requestscitizenservice' => 'Personlige henvendelser i borgerservice',
		'sms' => 'Antal modtagede SMS beskeder',
		'lettersin' => 'Antal modtagede breve',
		'lettersout' => 'Antal sendte breve'
	);
	
	public function translate ($name) {
		$return = isset($this->names[$name]) ? $this->names[$name] : false;
		return $this->output($return);
	}
	
	public function period ($value) {
		switch ($value) {
			case 1 :
				$return = '1 uge';
				break;
			case 4.33 :
				$return = '1 måned';
				break;
			case 13 :
				$return = '3 måneder';
				break;
			case 26 :
				$return = '6 måneder';
				break;
			case 52 :
				$return = '1 år';
				break;
			default :
				$return = '?';
				break;
		}
		return $this->output($return);
	}

}

?>