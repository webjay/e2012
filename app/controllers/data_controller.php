<?php

class DataController extends AppController {
	
	var $uses = array('Target', 'AreasMunicipality', 'Area', 'Municipality', 'Process', 'Criteria');
	var $components = array('Email');
	var $helpers = array('Javascript', 'Digitalis');

	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->allow('criteria');
	}

	private function lastDataStr ($mun) {
		if (empty($mun['Municipality']['Target'][0]['modified'])) {
			return '-';
		} else {
			return strftime('%R - %e. %b %Y', strtotime($mun['Municipality']['Target'][0]['modified']));
		}
	}
	
	public function process () {
		// get users municipality connection
		$mun = $this->Target->connection($this->Auth->user('id'));
		if (!$mun || empty($mun['Municipality']['id'])) {
			$this->cakeError('municipalityConnection');
		}
		if (empty($this->data)) {
			$this->data = $this->Process->find('first', array(
				'fields' => array('Process.*'),
				'conditions' => array(
					'Process.municipality_id' => $mun['Municipality']['id']
				),
				'order' => 'Process.modified DESC'
			));
		} else {
			$this->Process->create($this->data);
			$this->Process->set('municipality_id', $mun['Municipality']['id']);
			if ($this->Process->validates() && ($result = $this->Process->save())) {
				$digirate = $this->Process->calcProcessRate($mun['Municipality']['id']);
				$digirateTxt = $this->Process->polyColorProcessText($digirate);
				$msg = 'Dine data er registreret. Tak.';
				$msg .= '(Din indtastning gav en digitaliseringsgrad på '.$digirate.'% hvilket svarer til farven '.$digirateTxt.')';
				$this->flash($msg, 'area', 3);
				//$this->data = array();
			}
		}
		/* View vars */
		// pagetitle
		$this->pageTitle = 'Din kommunes digitaliseringsindsats';
		$this->set('title_for_layout', $this->pageTitle);
		$this->set('mun', $mun);
		$this->set('mod', $this->lastDataStr($mun));
	}
	
	public function volume () {
		// get users municipality connection
		$mun = $this->Target->connection($this->Auth->user('id'));
		if (!$mun || empty($mun['Municipality']['id'])) {
			$this->cakeError('municipalityConnection');
		}
		if (empty($this->data)) {
			$this->data = $this->Target->find('first', array(
				'conditions' => array(
					'Target.municipality_id' => $mun['Municipality']['id'],
					'Target.area_id' => 0
				),
				'order' => 'Target.created DESC'
			));
		} else {
			$this->data['Target'] = Set::classicExtract($this->data, 'Target.{\w+}.year');
			$this->Target->create($this->data);
			$this->Target->set('user_id', $this->Auth->user('id'));
			if ($this->Target->validates() && ($result = $this->Target->save())) {
				$digirate = $this->Target->calcTargetRate(array('Target' => $result));
				$this->Session->setFlash('Dine data er registreret. Tak. (Din indtastning gav en digitaliseringsgrad på '.$digirate.'%)');
				// send mail
				$this->Email->sendAs = 'html';
				$this->Email->to = $this->Auth->user('email');
				$this->Email->bcc = array('aln@kl.dk');
				$this->Email->replyTo = 'aln@kl.dk';
				$this->Email->subject = 'Bekræftelse';
				$this->Email->from = 'Det digitale landkort <noreply@digitaltlandkort.dk>';
				$this->Email->template = 'volume';
				$this->set('digirate', $digirate);
				$this->set('municipality', $mun['Municipality']['name']);
				$this->set('area', $this->Area->field('name', array('id' => $this->data['Target']['area_id'])));
				$this->set('receipt', array_slice($this->data['Target'], 2, null, true));
				$this->Email->send();
			}
		}
		/* View vars */
		$this->set('mun', $mun);
		$this->set('mod', $this->lastDataStr($mun));
		// set municipality_id for form
		$this->data['Target']['municipality_id'] = $mun['Municipality']['id'];
		// pagetitle
		$this->pageTitle = 'Indtast volumendata vedr. digitaliseringsområder';
		$this->set('title_for_layout', $this->pageTitle);
		// make digital areas list
		$digiareas = Set::combine($mun['Municipality']['Area'], '{n}.id', '{n}.name');
		$digiareas = array('Kommunen generelt') + $digiareas;
		$this->set('digiareas', $digiareas);
	}
	
	// Area
	
	public function areanew () {
		if (!empty($this->data)) {
			$this->Area->create($this->data);
			$this->Area->save();
			$this->data['AreasMunicipality']['area_id'] = $this->Area->id;
			$this->AreasMunicipality->create($this->data);
			$this->AreasMunicipality->save();
		}
		$this->redirect('/data/area');
	}

	public function area ($municipality_id = false) {
		if (!empty($this->data)) {
			if ($municipality_id === false) {
				$municipality_id = $this->data['AreasMunicipality']['municipality_id'];
			}
			foreach ($this->data['Area'] as $area) {
				if (empty($area['id'])) {
					continue;
				}
				$this->AreasMunicipality->create();
				$this->AreasMunicipality->save(array(
					'area_id' => $area['id'],
					'municipality_id' => $municipality_id
				));
			}
		}
		/* View vars */
		// get users municipality connection
		$mun = $this->Target->connection($this->Auth->user('id'));
		if (!$mun || empty($mun['Municipality']['id'])) {
			$this->cakeError('municipalityConnection');
		}
		$this->set('mun', $mun);
		$this->set('mod', $this->lastDataStr($mun));
		// get areas
		$areas = $this->Municipality->find('first', array(
			'conditions' => array(
				'Municipality.id' => $municipality_id
			),
			'contain' => array(
				'Area', 'AreasMunicipality'
			)
		));
		$this->set('areas', $areas);
		$this->set('arealist', $this->Area->find('list', array('order' => 'official DESC, id')));
		$this->pageTitle = $mun['Municipality']['name'].' Kommunes digitaliseringsområder';
		$this->set('title_for_layout', $this->pageTitle);
		$this->data['AreasMunicipality']['municipality_id'] = $mun['Municipality']['id'];
	}
	
	public function targetdata ($area_id) {
		// get users municipality connection
		$mun = $this->Target->connection($this->Auth->user('id'));
		if (!$mun || empty($mun['Municipality']['id'])) {
			$this->cakeError('municipalityConnection');
		}
		// get data
		$this->set('targetdata', $this->Target->find('first', array(
			'conditions' => array(
				'Target.municipality_id' => $mun['Municipality']['id'],
				'Target.area_id' => $area_id
			),
			'order' => 'Target.modified DESC',
			'recursive' => -1
		)));
		if (isset($this->params['url']['callback'])) {
			$this->set('callback', $this->params['url']['callback']);
		}
		//Configure::write('debug', 0);
	}

	// Todo: rename to visual
	public function criteria ($id) {
		$this->set('criteria', $this->Criteria->Visual->find('all', array(
			'conditions' => array('Visual.id' => $id),
			'contain' => array(
				'Criteria' => array(
					'order' => 'Criteria.criteria'
				)
			)
		)));
	}

}

?>