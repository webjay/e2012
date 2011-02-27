<div class="span-7 box">
<?php

	e($form->create());
	e($form->input('name'));
	e($form->end('Opret'));

?>
</div>

<hr class="clear" />

<ul>
<?php

	foreach ($visuals as $id => $name) {
		e($html->tag('li', $html->link($name, '/admin/visuals/edit/'.$id), array('escape' => false)));
	}
	
?>
</ul>