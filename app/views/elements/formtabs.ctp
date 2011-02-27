<div class="span-6">
	<div class="box">
		<dl>
			<dt>Kommune</dt>
			<dd><?php e($mun['Municipality']['name']); ?></dd>
			<dt>Seneste indtastning</dt>
			<dd><?php e($mod); ?></dd>
		</dl>
	</div>
</div>
<div class="span-17 prepend-1 last">
	<div id="tabs">
		<ol>
			<li>Trin 1: <a href="/data/process">Din kommunes digitaliseringsindsats</a></li>
			<li>Trin 2: <a href="/data/area/<?php e($mun['Municipality']['id']); ?>">Udvælg digitaliseringsområder</a></li>
			<li>Trin 3: <a href="/data/volume">Indtast volumendata vedr. kommunen generelt og de særlige digitaliseringsområder</a></li>
		</ol>
	</div>
</div>
<div class="clear"></div>
