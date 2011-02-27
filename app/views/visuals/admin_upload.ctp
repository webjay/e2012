<div class="span-7 box">
<?php

	e($form->create(null, array('type' => 'file')));

	e($form->input('Visual'));

	e($form->file('csv'));

	e($form->end('Upload'));

?>
</div>