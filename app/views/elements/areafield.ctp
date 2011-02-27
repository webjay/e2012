<li>
	<div class="span-10"><?php

	e($form->input('Area.'.$fieldcount.'.name', array(
		'type' => 'text',
		'label' => 'Digitaliseringsområde',
		'legend' => false,
		'fieldset' => false,
		'class' => 'areacomplete'
	)));

	?></div>
	<div class="span-7"><?php

	e($form->input('Degree.'.$fieldcount.'.degree', array(
		'type' => 'text',
		'label' => 'Anvendelsesgrad',
		'legend' => false,
		'fieldset' => false,
		'class' => 'degree',
		'after' => ' %'
	)));

	?></div>
	<div class="clearfix"></div>
</li>