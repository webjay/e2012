Vælg format
<ul>
	<li><?php e($html->tag('a', $munip['Municipality']['name'].'.xml', array(
	'href' => 'output/'.$munip['Municipality']['name'].'.xml'
))); ?></li>
	<li><?php e($html->tag('a', $munip['Municipality']['name'].'.csv', array(
	'href' => 'output/'.$munip['Municipality']['name'].'.csv'
))); ?></li>
	<li><?php e($html->tag('a', $munip['Municipality']['name'].'.json', array(
	'href' => 'output/'.$munip['Municipality']['name'].'.json'
))); ?></li>
</ul>