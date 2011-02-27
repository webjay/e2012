<header>
	<h1>Det digitale landkort</h1>
</header>

<table>
	<caption style="text-align: left; padding: 5px;">Hermed en bekræftelse på din indtastning for <?php e($municipality); ?> på digitaliseringsområdet <?php e($area); ?></caption>
	<thead>
		<tr>
			<th>Område</th>
			<th>Antal</th>
			<th>Opgørelsesperiode</th>
			<th>Årstal</th>
		</tr>
	</thead>
	<tbody>
<?php

	do {
		e('<tr>');
		e($html->tag('td', $digitalis->translate(key($receipt))));
		e($html->tag('td', current($receipt)));
		e($html->tag('td', $digitalis->period(next($receipt))));
		e($html->tag('td', next($receipt)));
		e('</tr>');
		e("\n");
	} while (next($receipt) !== false);

?>
	</tbody>
</table>

<dl>
	<dt>Digitaliseringsgrad</dt>
	<dd><?php e($digirate); ?></dd>
</dl>

<footer>
	<p>
		<a href="http://digitaltlandkort.dk/">digitaltlandkort.dk</a>
	</p>
</footer>
