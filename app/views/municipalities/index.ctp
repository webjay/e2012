
<h1>Download data</h1>


<div class="span-24">
<?php
	echo($session->flash());
?>
</div>


<div class="span-20">

<p>Vælg data fra alle kommuner, en udvalgt kommune eller et udvalgt digitaliseringsområde.</p>

<?php

$script = '
google.load("jqueryui", "1");
google.setOnLoadCallback(function(){
	jQuery("#tabs").tabs();
	jQuery("#tabs ul a").click(function(){
		jQuery("#MunicipalitySet").attr("value", jQuery(this).attr("data-set"));
	});
});
';
$javascript->codeBlock($script, array('inline' => false));

echo($form->create('Municipality', array(
	'action' => 'download',
	'type' => 'get'
)));
echo($form->hidden('set'));

?>
<div id="tabs">
	<ul>
		<li><a href="#kom" data-set="munip">Kommune</a></li>
		<li><a href="#dig" data-set="area">Udvalgt digitaliseringsområde</a></li>
		<li><a href="#kom" data-set="process">Process spørgsmål</a></li>
	</ul>
<?php

// munips
echo('<div id="kom">');
echo($form->select('municipality_id', $munips, null, array(
	'empty' => 'Vælg kommune'
)));
echo('</div>');

// areas
echo('<div id="dig">');
echo($form->select('area_id', $areas, null, array('empty' => 'Vælg digitaliseringsområde')));
echo('</div>');

?>
</div>

<div class="prepend-top">
<?php

// format
/*
$options = array(
	'csv' => 'CSV',
	'xml' => 'XML',
	'json' => 'JSON'
);
echo($form->radio('format', $options, array('default' => 'csv')));
*/
echo($form->hidden('format', array('value' => 'csv')));

echo($form->end('Download'));

?>
</div>

</div>
