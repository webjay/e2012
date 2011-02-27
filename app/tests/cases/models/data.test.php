<?php

App::import('Model', 'Target');
App::import('Model', 'Process');

class DataTestCase extends CakeTestCase {
	
	public function testTargetRate () {
		$this->Target =& ClassRegistry::init('Target');
		$data = $this->Target->find('first', array(
			'conditions' => array(
				'Target.id' => 45
			)
		));
		$result = $this->Target->calcTargetRate(array('Target' => $data));
		$expected = 50;
		$this->assertEqual($result, $expected);
	}

	public function testProcessRate () {
		$this->Process =& ClassRegistry::init('Process');
		$result = $this->Process->calcProcessRate(99);
		$expected = 7;
		$this->assertEqual($result, $expected);
	}

}

?>