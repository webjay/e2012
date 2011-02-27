<?php

class AppError extends ErrorHandler {

	function __construct ($method, $messages) {
		Configure::write('debug', 1);
		parent::__construct($method, $messages);
	}
	
	function municipalityConnection ($params) {
		$this->controller->set('title', 'Fejl');
		$this->controller->set('head', 'Din bruger-konto er ikke associeret med en kommune');
		$this->controller->set('message', 'Kontakt venligst administratoren for at blive associeret med en kommune.');
		$this->_outputMessage('error');
		$this->log('Bruger konto er ikke associeret til kommune. Data: '.serialize($_SESSION));
	}
	
}	

?>