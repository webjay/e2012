<?php

class MunicipalitiesController extends AppController {

	//var $components = array('Auth', 'RequestHandler');
	var $helpers = array('xml', 'csv', 'Javascript');

	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->allow('output');
	}

	public function index () {
		$munips = array('Alle kommuner') + $this->Municipality->find('list');
		$this->set('munips', $munips);
		$this->set('areas', $this->Municipality->Area->find('list'));
	}
	
	public function download () {
		if ($this->params['url']['municipality_id'] != '') {
			$conditions = array();
			if ($this->params['url']['municipality_id'] > 0) {
				$conditions = array('Municipality.id' => $this->params['url']['municipality_id']);
			}
			$output = $this->Municipality->find('first', array(
				'conditions' => $conditions,
				'contain' => array('Target')
			));
			if ($this->params['url']['municipality_id']) {
				$filename = $output['Municipality']['name'];
			} else {
				$filename = 'alle-kommuner';
			}
		} else if (!empty($this->params['url']['area_id'])) {
			$area_id = $this->params['url']['area_id'];
			$output = $this->Municipality->query('SELECT Municipality.id, Municipality.name, Target.*, Area.id, Area.name FROM municipalities AS Municipality LEFT JOIN targets AS Target ON (Municipality.id = Target.municipality_id) LEFT JOIN areas AS Area ON (Target.area_id = Area.id) WHERE Target.area_id = '.$area_id);
			$filename = $output[0]['Area']['name'];
		}
		if (empty($output)) {
			$this->Session->setFlash('Ingen data');
			$this->redirect('/municipalities');
		}
		// output
		$this->set('filename', $filename);
		$this->set('output', $output);
		$this->RequestHandler->respondAs($this->params['url']['format']);
		$this->RequestHandler->renderAs($this, $this->params['url']['format']);
	}
	
	public function format () {
		if (empty($this->params['url']['id'])) {
			$this->redirect('./');
		} else {
			$id = $this->params['url']['id'];
			$this->Municipality->set('id', $id);
			$this->set('munip', $this->Municipality->read());
		}
	}

	public function output ($city = '') {
		if (empty($city)) {
			$filename = 'alle-kommuner';
			$conditions = array();
		} else {
			$filename = $city;
			$conditions = array(
				'Municipality.name' => $city
			);
		}
		$output = $this->Municipality->find('first', array(
			'conditions' => $conditions,
			'contain' => array('Target')
		));
		if (!$output || empty($output['Target'])) {
			$this->Session->setFlash('Ingen data');
			$this->redirect('./');
		}
		// output
		$this->set('filename', $filename);
		$this->set('output', $output);
	}

}

?>