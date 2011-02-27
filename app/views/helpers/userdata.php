<?php 

	class UserdataHelper extends AppHelper { 

		var $helpers = array('Session'); 

		public function get () { 
			if ($data = $this->Session->read('Auth')) { 
				return $this->output(isset($data['User']) ? $data['User'] : false); 
			} 
		} 

	} 

?>