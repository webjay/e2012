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
		$this->set('all', isset($this->params['url']['all']) ? true : false);
		$set = $this->params['url']['set'];
		switch ($set) {
			case 'area' :
				$area_id = $this->params['url']['area_id'];
				$output = $this->Municipality->find('all', array(
					'contain' => array(
						'Area' => array(
							'conditions' => array(
								'Area.id' => $area_id
							)
						),
						'Target' => array(
							'conditions' => array(
								'Target.area_id' => $area_id
							),
							'order' => 'modified DESC'
						)
					)
				));
				//$filename = $output[0]['Area']['name'];
				$filename = 'area'.$area_id;
				break;
			case 'process' :
				$render = 'process';
				$conditions = array();
				$find = 'all';
				if ($this->params['url']['municipality_id'] > 0) {
					$conditions = array('Municipality.id' => $this->params['url']['municipality_id']);
					$find = 'first';
				}
				$output = $this->Municipality->find($find, array(
					'conditions' => $conditions,
					'contain' => array(
						'Process' => array(
							'order' => 'modified DESC'
						)
					)
				));
				if ($this->params['url']['municipality_id']) {	
					$filename = $output['Municipality']['name'].'-process';
				} else {
					$filename = 'alle_kommuner-process';
				}
				break;
			default :
			case 'munip' :
				$conditions = array();
				$find = 'all';
				if ($this->params['url']['municipality_id'] > 0) {
					$conditions = array('Municipality.id' => $this->params['url']['municipality_id']);
					$find = 'first';
				}
				$output = $this->Municipality->find($find, array(
					'conditions' => $conditions,
					'contain' => array(
						'Target' => array(
							'order' => 'modified DESC'
						),
						'Area'
					)
				));
				if ($this->params['url']['municipality_id']) {	
					$filename = $output['Municipality']['name'].'-omraader';
				} else {
					$filename = 'alle_kommuner-omraader';
				}
				break;
		}
		if (empty($output)) {
			$this->Session->setFlash('Ingen data');
			$this->redirect('/municipalities');
		}
		// output
		$this->set('filename', $filename);
		$this->set('output', $output);
		$this->set('areas', $this->Municipality->Area->find('list'));
		$this->set('users', $this->Municipality->User->find('list'));
		if (isset($this->params['url']['format'])) {
			$this->RequestHandler->respondAs($this->params['url']['format']);
			$this->RequestHandler->renderAs($this, $this->params['url']['format']);
		}
		if (isset($render)) {
			$this->render($render);
		}
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