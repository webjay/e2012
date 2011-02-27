<?php

class UsersController extends AppController {
	
	//var $components = array('Security', 'Auth', 'Email', 'Session');
	var $components = array('Email', 'Session');
	//var $scaffold = 'admin';
	
	function beforeFilter () {
		parent::beforeFilter();
		// $this->Security->requireAuth();
		// $this->Security->requirePost('passwd2');
		$this->Auth->allow('passwd', 'passwd2', 'passwd3', 'passwd4');
	}
	
	function login () {
		$this->pageTitle = 'Logind';
		$this->set('title_for_layout', $this->pageTitle);
	}

	function logout () {
		$this->redirect($this->Auth->logout());
	}

	function passwd () {
		$this->pageTitle = 'Adgangskode rekvirering';
		$this->set('title_for_layout', $this->pageTitle);
	}

	function passwd2 () {
		$this->set('title_for_layout', 'Adgangskode rekvireret');
		$this->User->set($this->data);
		if (!empty($this->data) && $this->User->validates()) {
			if ($user = $this->User->findByEmail($this->data['User']['email'])) {
				$this->User->id = $user['User']['id'];
			} else {
				//$this->Session->setFlash('Ukendt email');
				//$this->redirect('/users/passwd');
				return; // don't confirm 
			}
			$ticket = Security::hash(String::uuid());
			$this->User->saveField('ticket', $ticket);
			$this->set('link', 'http://'.env('SERVER_NAME').'/users/passwd3/'.urlencode($ticket));
			$this->Email->reset();
			//$this->Email->header(array('Content-Transfer-Encoding' => '7bit'));
			//$this->Email->charset = 'UTF-8';
			//$this->Email->from = 'Det digitale landkort <noreply@digitaltlandkort.dk>';
			$this->Email->from = '<noreply@digitaltlandkort.dk>';
			$this->Email->to = trim($user['User']['email']);
			//$this->Email->bcc = array('support@webcom.dk');
			$this->Email->subject = 'Adgangskode bestilling';
			$this->Email->template = 'passwd';
			$this->Email->sendAs = 'text';
			//$this->Email->delivery = 'debug';
			$this->Email->delivery = 'smtp';
			$this->Email->send();
		} else {
			$this->render('passwd');
		}
	}

	function passwd3 ($ticket = '') {
		if (empty($this->data) && !empty($ticket)) {
			$this->pageTitle = 'Indtast ny adgangskode';
			$this->set('title_for_layout', $this->pageTitle);
			if ($user = $this->User->findByTicket($ticket)) {
				$this->data['User']['ticket'] = $ticket;
				return true;
			} else {
				$this->Session->setFlash('Ukendt nøgle');
				$this->redirect('/users/passwd');
			}
		} else if (!empty($this->data['User']['ticket'])) {
			if ($user = $this->User->findByTicket($this->data['User']['ticket'])) {
				$this->User->id = $user['User']['id'];
				$this->User->set($this->data);
				if ($this->User->validates(array('fieldList' => array('password')))) {
					$this->User->data['User']['password'] = $this->Auth->password($this->User->data['User']['password']);
					$this->User->data['User']['ticket'] = '';
					if ($this->User->save()) {
						$this->Session->setFlash('Din adgangskode er nu ændret');
						$this->Auth->login($this->User->read());
						$this->redirect('/');
					}
				}
				return false;
			}
		}
		// unknown error
		$this->redirect('/users/passwd');
	}

}

?>