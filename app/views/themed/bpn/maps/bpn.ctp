<?php

$visual_id = key($visuals);

$script = '
	map3.visual_id = '.$visual_id.';
	google.load("maps", "3", {callback: map3.init, language: "da", other_params: "sensor=false"});
';
$javascript->codeBlock($script, array('inline' => false));

?>

<nav class="flatmenu">
	<ul>
	<?php

	foreach ($visuals as $id => $visual) {
		$link = $html->tag('a', $visual, array(
			'href' => '/bpn?visual_id='.$id
		));
		echo($html->tag('li', $link));
	}

	?>
	</ul>
</nav>

<section>
	<div class="span-24 prepend-top append-bottom">
		<div id="map-container">
			<div id="map"></div>
			<div id="overlay" class="transparent"></div>
		</div>
	</div>
</section>