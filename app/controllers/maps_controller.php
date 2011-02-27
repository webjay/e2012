<?php

class MapsController extends AppController {
	
	var $uses = array('Area', 'Visual');
	var $helpers = array('Cache', 'Javascript');
	public $view = 'Theme';

	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->allow('index', 'bpn');
		$this->cacheAction = '1 hour';
	}
	
	public function bpn () {
		$this->theme = 'bpn';
		$this->set('title_for_layout', 'Bedst på Nettet');
		// visuals
		$this->set('visuals', $this->Visual->find('list', array(
			'conditions' => array(
				'group_id' => 2
			)
		)));
	}
	
	function index () {
		$this->set('title_for_layout', '');
		// for select box
		$this->set('areas', $this->Area->find('list', array(
			'order' => 'id'
		)));
		// for top 10
		$sqlCalc = '(SUM(visitors) + SUM(transactionsdone) + SUM(emailin) + SUM(emailout) + SUM(sms)) / (SUM(visitors) + SUM(transactionsdone) + SUM(callin) + SUM(callout) + SUM(emailin) + SUM(emailout) + SUM(requests) + SUM(sms) + SUM(lettersin) + SUM(lettersout)) * 100 AS digirate';
		$toplist = $this->Area->Target->find('all', array(
			'fields' => array(
					'Target.area_id',
					$sqlCalc
				),
			'group' => 'Target.area_id',
			'order' => 'digirate DESC',
			'limit' => 10
		));
		foreach ($toplist as $key => $row) {
			$toplist[$key]['Area']['name'] = $this->Area->field('name', array('Area.id' => $row['Target']['area_id']));
		}
		$this->set('toplist', $toplist);
		// other visuals
		$this->set('visuals', $this->Visual->Group->find('all', array(
			'fields' => array('Group.id', 'Group.name'),
			'contain' => array(
				'Visual'
			)
		)));
	}

}

?>