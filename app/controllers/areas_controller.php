<?php

App::import('Sanitize');

class AreasController extends AppController {
	
	//var $components = array('Auth', 'RequestHandler');
	var $helpers = array('Javascript');
		
	public function field () {
		$fieldcount = 0;
		if (!empty($this->passedArgs['fieldcount'])) {
			$fieldcount = $this->passedArgs['fieldcount'];
		}
		$this->set('fieldcount', $fieldcount);
	}
	
	public function autocomplete () {
		$query = '';
		$areas = array();
		if (!empty($this->params['url']['query'])) {
			$query = Sanitize::escape($this->params['url']['query']);
			$areas = $this->Area->find('list', array(
				'conditions' => array(
					'name LIKE' => $query.'%'
				)
			));
			$areas = Set::classicExtract($areas, '{n}.name');
		}
		// output
		Configure::write('debug', 0);
		$this->data = array(
			'query' => $query,
			'suggestions' => $areas
		);
	}
	
	public function search () {
		$arealist = false;
		if (!empty($this->params['url']['q'])) {
			$q = Sanitize::escape($this->params['url']['q']);
			$arealist = $this->Area->find('list', array(
				'conditions' => array(
					'name LIKE' => '%'.$q.'%'
				)
			));
		}
		$this->set('arealist', $arealist);
	}
	
	public function admin_merge () {
		if (!empty($this->data) && !empty($this->data['Area']['winner']) && !empty($this->data['Area']['losers'])) {
			$this->Area->AreasMunicipality->updateAll(array('area_id' => $this->data['Area']['winner']), array('area_id' => $this->data['Area']['losers']));
			$this->Area->Target->updateAll(array('area_id' => $this->data['Area']['winner']), array('area_id' => $this->data['Area']['losers']));
			$this->Area->deleteAll(array('id' => $this->data['Area']['losers']));
			$this->Session->setFlash(count($this->data['Area']['losers']).' digitaliseringsområder er hermed slettet.');
		}
		//$this->Session->setFlash(count($this->data['Area']['losers']).' digitaliseringsområder er hermed slettet.');
		$this->set('areas', $this->Area->find('list'));
	}

}

?>