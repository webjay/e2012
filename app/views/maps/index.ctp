<?php

$script = '
	google.load("maps", "3", {callback: map3.init, language: "da", other_params: "sensor=false"});
';
$javascript->codeBlock($script, array('inline' => false));

?>
<section>
	<aside class="span-24">
		<div class="span-15 colborder">
			<h1>Velkommen til Det Digitale Landkort!</h1>
			<h2>Det Digitale Landkort er et samlingssted for kommunal videndeling om digital borgerbetjening.</h2>
			<p>Formålet med det digitale landkort er at sikre sparring mellem kommunerne om kommunernes digitale indsatser og resultater. Her er det gode eksempel i fokus og kommunerne har mulighed for nem adgang til information om andre kommuners digitale prioriteringer og succeser.</p>
			<p><b>KL understreger, at data fra Det Digitale Landkort skal anvendes og analyseres med varsomhed. Der er ikke tale om objektivt sammenlignelig data, blandt andet grundet forskelle i kommunernes organisering samt metodiske forskelle i forbindelse med indsamling af data. KL anbefaler derfor, at data behandles med disse forbehold in mente, og at eventuelle sammenligninger udføres i tæt dialog med de pågældende kommuner, om hvilken indsamlingsmetode, der ligger til grund for dataen på det digitale landkort.</b></p>
			<a href="#readmore">Læs mere</a>
		</div>
		<div class="span-8 last">
			<strong>Bedste digitaliseringsområder:</strong>
			<ol>
				<?php
					foreach ($toplist as $row) {
						if ($row[0]['digirate'] > 0) {
							if ($row['Target']['area_id'] == 0) {
								$row['Area']['name'] = 'Kommunen generelt';
							}
							e($html->tag('li', $html->link($row['Area']['name'], '/?Area='.$row['Target']['area_id']).' '.intval($row[0]['digirate']).'%'));
						}
					}
				?>
			</ol>
			<?php
		
				e($form->create('Visual', array(
					'url' => '/',
					'type' => 'get',
					'id' => 'digiarea'
				)));
				e('<b>Digitaliseringsområde</b>');
				$areas = array(0 => 'Kommunerne generelt') + $areas;
				e($form->select('Area', $areas));
				e($form->submit('Vis', array('div' => false)));
				e($form->end());
			?>
			<div class="prepend-top">
				<?php
					e($form->create('Visual', array(
						'url' => '/',
						'type' => 'get'
					)));
					e('<b>Andre visualiseringer</b><br />');
					echo('<select id="Visuals" name="visual_id">');
					echo($html->tag('option', ''));
					foreach ($visuals as $group) {
						echo('<optgroup label="'.$group['Group']['name'].'" data-groupid="'.$group['Group']['id'].'">');
						foreach ($group['Visual'] as $visual) {
							echo($html->tag('option', $visual['name'], array(
								'value' => $visual['id']
							)));
						}
						echo('</optgroup>');
					}
					echo('</select>');
					//e($form->submit('Vis', array('div' => false)));
					e($form->end());
				?>
			</div>
		</div>
	</aside>
	<div class="span-24 prepend-top append-bottom">
		<div id="map-container">
			<div id="map"></div>
			<div id="overlay" class="transparent"></div>
		</div>
	</div>
</section>
<section>
	<article>
		<span id="readmore">Kommunernes farve bestemmes af i hvor høj grad kommunerne lever op til proceskravene i e2012:</span>
		<ul>
			<li>Hvorvidt kommunen har en kanalstrategi med fokus på digitalisering.</li>
			<li>Hvorvidt kommunen anvender den fælleskommunale dokumentationsmetode.</li>
			<li>Hvorvidt kommunen har placeret ansvaret for e2012.</li>
			<li>Hvorvidt kommunen arbejder med kompetenceudvikling af sine frontmedarbejderes digitale evner.</li>
			<li>Hvorvidt kommunen i 2010 har udvalgt min. 5 særlige digitaliseringsområder, hvor de arbejder målrettet med at øge digitaliseringen.</li>
		</ul>
		<p>Digitaliseringsgraden i procent bestemmes af, hvor stor en andel af kommunens samlede borgerhenvendelser vedrørende administrativ borgerservice, der foregår via digitale kanaler.</p>
		<p>Det Digitale Landkort er et vigtigt led i den fælleskommunale dokumentationsmetode, som du kan læse mere om her: <a href="http://www.kl.dk/e2012/dokumentationsmetode" title="Den fælleskommunale dokumentationsmetode – fælles krav til alle kommuner for at målrette digitaliseringen">Den fælleskommunale dokumentationsmetode</a></p>
		<p>For mere information om kommunernes e2012 se her: <a href="http://www.kl.dk/e2012" title="e2012">www.kl.dk/e2012</a></p>
		<p>For pressekontakt vedrørende data på det digitale landkort henvises til <a href="mailto:AKF@kl.dk">Anne Kathrine Fjord-Marschall</a>.</p>
	</article>
</section>
