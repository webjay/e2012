<h2><?php e($title_for_layout); ?></h2>
<div class="span-6 success">
	<p>Hvis din email er kendt af systemet er et link sendt til din email adresse.</p>
	Via det link kan du ændre din adgangskode.
</div>
<div class="span-18 last"></div>

<div class="span-6 prepend-top notice">
	Af sikkerhedshensyn oplyses det ikke om din email er kendt af systemet.
</div>
<div class="span-18 last">
	<?php
		e($this->Session->flash());
		e($this->Session->flash('email'));
	?>
</div>