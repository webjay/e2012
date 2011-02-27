<?php

//App::import('Vendor', 'DebugKit.FireCake');

class AppController extends Controller {

	var $scaffold = 'admin';
	//var $components = array('RequestHandler');
	var $components = array('Auth', 'RequestHandler', 'Session');
	
	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->loginRedirect = array('controller' => 'data', 'action' => 'process');
		$this->Auth->fields = array(
			'username' => 'email',
			'password' => 'password'
		);
		$this->Auth->loginError = 'Forkert brugernavn og adgangskode kombination';
		$this->Auth->authError = 'Venligst logind';
		// allow pages
		$this->Auth->allow('display');
		// check admin
		if (isset($this->params['admin']) && $this->params['admin']) {
			if (!$this->Auth->user('admin')) {
				$this->Session->setflash('Denne sektion kræver at du er logget ind som administrator');
				$this->redirect('/users/login');
			}
			$this->theme = 'admin';
		}
	}
	
}

?>