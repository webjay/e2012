<?php

	class DigirateBehavior extends ModelBehavior {

		private $totalReq = array('visitors', 'transactionsdone', 'callin', 'callout', 'emailin', 'emailout', 'requests', 'sms', 'lettersin', 'lettersout');
		private $digiReq = array('visitors', 'transactionsdone', 'emailin', 'emailout', 'sms');
		private $alpha = '80';
	
		private function isRequest ($key) {
			return in_array($key, $this->totalReq);
		}

		private function isDigiRequest ($key) {
			return in_array($key, $this->digiReq);
		}
		
		public function calcTargetRate (&$Model, $targets) {
			$totalRequests = 0;
			$digitalRequests = 0;
			foreach ($targets as $target) {
				if (!is_array($target)) {
					continue;
				}
				foreach ($target['Target'] as $key => $value) {
					if ($this->isRequest($key)) {
						$value_year = $value * (53 - $target['Target'][$key.'-period']);
						$totalRequests += $value_year;
						if ($this->isDigiRequest($key)) {
							$digitalRequests += $value_year;
						}
					}
				}
			}
			// avoid division by zero
			if (!$totalRequests) {
				return 0;
			}
			// percentage
			$percentage = $digitalRequests / $totalRequests * 100;
			$percentage = round($percentage);
			// done
			return $percentage;
		}
		
		public function polyColorTarget (&$Model, $digirate) {
			/* color = alpha blue green red */
			if ($digirate >= 30) {
				// green
				return $this->alpha.'00ff00';
			} else if ($digirate >= 10) {
				// yellow
				return $this->alpha.'00ffff';
			} else if ($digirate > 0) {
				// red
				return $this->alpha.'0000ff';
			} else {
				// no data = grey
				return $this->alpha.'c0c0c0';
			}
		}

		public function polyColorTargetText (&$Model, $digirate) {
			/* color = alpha blue green red */
			if ($digirate >= 70) {
				// green
				return 'Grøn';
			} else if ($digirate >= 50) {
				// yellow
				return 'Gul';
			} else if ($digirate > 0) {
				// red
				return 'Rød';
			} else {
				// no data = grey
				return 'Grå';
			}
		}

		public function calcProcessRate (&$Model, $municipality_id) {
			$data = $Model->find('first', array(
				'fields' => array($Model->name.'.municipality_id', '(channelstrategy + docmethod + organisation + ambassadors) AS digirate'),
				'conditions' => array($Model->name.'.municipality_id' => $municipality_id),
				'order' => $Model->name.'.modified DESC',
				'recursive' => -1
			));
			if ($data) {
				return $data[0]['digirate'];
			} else {
				return 0;
			}
		}

		public function polyColorProcessText (&$Model, $digirate) {
			/* color = alpha blue green red */
			if ($digirate >= 8) {
				// green
				return 'Grøn';
			} else if ($digirate >= 3) {
				// yellow
				return 'Gul';
			} else if ($digirate > 0) {
				// red
				return 'Rød';
			} else {
				// no data = grey
				return 'Grå';
			}
		}
		
		public function polyColorProcess (&$Model, $point) {
			/* color = alpha blue green red */
			if ($point >= 8) {
				// green
				return $this->alpha.'00ff00';
			} else if ($point >= 3) {
				// yellow
				return $this->alpha.'00ffff';
			} else if ($point > 0) {
				// red
				return $this->alpha.'0000ff';
			} else {
				// no data = grey
				return $this->alpha.'c0c0c0';
			}
		}

		public function digitalizationRate (&$Model) {
			$data = $this->Municipality->find('all');
			switch ($Model->name) {
				case 'Target' :
					return $this->calcTargetRate($data);
					break;
				case 'Process' :
					$return = array();
					foreach ($data as $munip) {
						$return[$munip['Municipality']['id']] = $this->calcProcessRate($Model, $munip['Municipality']['id']);
					}
					return $return;
					break;
			}
		}

	}

?>