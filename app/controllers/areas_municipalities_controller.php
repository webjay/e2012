<?php

class AreasMunicipalitiesController extends AppController {

	//var $components = array('Auth');

	public function delete ($mid, $id) {
		$owner = $this->AreasMunicipality->query('SELECT 1 FROM areas_municipalities LEFT JOIN municipalities ON areas_municipalities.municipality_id = municipalities.id LEFT JOIN users ON municipalities.id = users.municipality_id WHERE users.id = '.$this->Auth->user('id').' AND areas_municipalities.id = '.$id);
		if ($owner) {
			if ($this->AreasMunicipality->delete($id)) {
				$this->Session->setFlash('Relationen er fjernet.');
			}
		}
		$this->redirect('/data/area/'.$mid);
	}

}

?>