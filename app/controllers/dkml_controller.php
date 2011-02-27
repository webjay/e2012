<?php

class DkmlController extends AppController {
	
	var $uses = array('Municipality', 'Visual');
	var $helpers = array('xml', 'Cache');
	var $cacheAction = array( 
		'kml' => array('callbacks' => true, 'duration' => '1 day'),
		'style' => array('callbacks' => true, 'duration' => '1 minute'),
		'visual' => array('callbacks' => true, 'duration' => '1 day'),
		'vstyle' => array('callbacks' => true, 'duration' => '1 minute')
	);

	function beforeFilter () {
		parent::beforeFilter();
		$this->Auth->allow('kml', 'style', 'visual', 'vstyle');
		Configure::write('Session.start', false);
		$this->RequestHandler->setContent('kml', 'application/vnd.google-earth.kml+xml');
	}

	function beforeRender () {
		//header('P3P:'); // unable to remove
		header('Set-Cookie:');
	}

	private function expireTime ($time = '10 minutes', $areaId = 0, $visual_id = 0) {
		// match expires header with cakes cache expire time
		$cacheKey = $this->name.'-'.$this->action.'-'.$areaId.'-'.$visual_id.'-ExpireTime';
		Cache::set(array('duration' => $time));
		if ($expireTime = Cache::read($cacheKey)) {
			return $expireTime;
		} else {
			$expireTime = gmdate('D, d M Y H:i:s \G\M\T', strtotime($time));
			Cache::write($cacheKey, $expireTime);
			return $expireTime;
		}
	}

	public function kml ($areaId = 0) {
		$this->header('Expires: '.$this->expireTime('1 day', $areaId));
		$this->set('areaId', $areaId);
	}             
	
	private function googlify_color ($color) {
		return substr($color, 4, 2).substr($color, 2, 2).substr($color, 0, 2);
	}	            

	public function style ($areaId = 0) {
		$this->Municipality->contain(array('Area', 'Process'));
		$munips = $this->Municipality->find('all');
		foreach ($munips as $key => $munip) {
			// Digirate
			$target = $this->Municipality->Target->find('first', array(
				'conditions' => array(
					'Target.municipality_id' => $munip['Municipality']['id'],
					'Target.area_id' => $areaId
				),
				'order' => 'Target.modified DESC'
			));
			$munips[$key]['Municipality']['digirate'] = $this->Municipality->Target->calcTargetRate(array($target));
			// Polycolor
			if ($areaId) {
				$munips[$key]['Municipality']['polyColor'] = $this->Municipality->Process->polyColorTarget($munips[$key]['Municipality']['digirate']);
			} else {
				$processRate = $this->Municipality->Process->calcProcessRate($munip['Municipality']['id']);
				$munips[$key]['Municipality']['polyColor'] = $this->Municipality->Process->polyColorProcess($processRate);
			}
			// strategy
			$munips[$key]['Municipality']['strategy'] = $this->Municipality->Process->field('channelstrategy_url', array('municipality_id' => $munip['Municipality']['id']), 'modified DESC');
			// areas
			$munips[$key]['Municipality']['areas'] = Set::classicExtract($munips[$key]['Area'], '{n}.name');
		}
		$this->set('munips', $munips);
	}                         
	
	/* Visuals */

	public function visual ($visual_id) {
		$this->header('Expires: '.$this->expireTime('1 day', 0, $visual_id));
		$this->set('visual_id', $visual_id);
	}                         

	public function vstyle ($visual_id = 0) {
		$visuals = $this->Visual->find('first', array(
			'conditions' => array(
				'Visual.id' => $visual_id
			),
			'recursive' => 2
		));
		// set colors
		$munips = array();
		foreach ($visuals['Visualnode'] as $key => $node) {
			$color = 'c0c0c0';
			$c = $this->Visual->Criteria->find('first', array(
				'fields' => array('color'),
				'conditions' => array(
					'visual_id' => $visual_id,
					'criteria >= ' => $node['val']
				),
				'order' => array('criteria')
			));
			if ($c) {
				$color = $c['Criteria']['color'];
			}
			$munips[$key]['name'] = $node['Municipality']['name'];
			$munips[$key]['kmldomid'] = $node['Municipality']['kmldomid'];
			$munips[$key]['polyColor'] = $this->googlify_color($color);
		}
		$this->set('munips', $munips);
	}                         

}

?>