<?php

	if (!empty($arealist)) {
		$n = 0;
		foreach ($arealist as $value => $area) {
			$n++;
			$class = is_int($n / 3) ? 'last' : '';
			e($form->input('Area.'.$n.'.id', array(
				'type' => 'checkbox',
				'label' => $area,
				'value' => $value,
				'div' => array(
					'class' => 'span-7 append-1 '.$class
				)
			)));
		}
		e('<hr class="clear space" />');
		e($form->submit('Gem'));		
	}

?>