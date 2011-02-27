<?php

class VisualsController extends AppController {
	
	public function admin_upload () {
		$this->set('visuals', $this->Visual->find('list'));
		if (!empty($this->data)) {
			ini_set('auto_detect_line_endings', true);
			if (is_uploaded_file($this->data['Visual']['csv']['tmp_name'])) {
				if (($handle = fopen($this->data['Visual']['csv']['tmp_name'], 'r')) !== FALSE) {
				    while (($data = fgetcsv($handle)) !== FALSE) {
						$this->Visual->Visualnode->create();
						$municipality_id = $this->Visual->query('SELECT id FROM municipalities WHERE kmldomid LIKE "'.substr($data[0], 0, strpos($data[0], ' ')).'%"');
						if (empty($municipality_id)) {
							echo($data[0].': Not found.<br/>');
							continue;
						}
						$municipality_id = $municipality_id[0]['municipalities']['id'];
						$this->Visual->Visualnode->save(array(
							'Visualnode' => array(
								'visual_id' => $this->data['Visual']['Visual'][0],
								'municipality_id' => $municipality_id,
								'name' => $data[0],
								'val' => $data[1]
							)
						));
					}
					fclose($handle);
				}
			}
		}
	}

}

?>