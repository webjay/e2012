<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8" />
	<title><?php if (!empty($title_for_layout)) { e($title_for_layout.' | '); } ?>Det digitale landkort | KL</title>
	<link rel="stylesheet" href="/css/blueprint/blueprint/screen.css" media="screen, projection" />
	<link rel="stylesheet" href="/css/blueprint/blueprint/print.css" media="print" />
	<!--[if lt IE 8]><link rel="stylesheet" href="/css/blueprint/blueprint/ie.css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" href="/css/custom.css" media="screen, projection" />
	<script type="text/javascript" src="http://www.google.com/jsapi?key=<?php e(GOOGLEAPIKEY); ?>"></script>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css" media="screen, projection" />
	<script src="/js/custom.js" async="async"></script>
</head>
<body>

<div class="container prepend-top append-bottom">

	<header>
		<div id="logo" class="span-4 append-1">
			<a href="/"><img src="/img/e2012.png" alt="E2012" /></a>
			<h1 class="hide"><a href="/">Det digitale landkort</a></h1>
		</div>
		<div class="span-19 last">
			<cake:nocache>
			<nav>
			     <ul>
					<?php if ($session->read('Auth.User.id')) : ?>
					<li class="ui-state-default ui-corner-all"><a href="/">Se data</a></li>
					<li class="ui-state-default ui-corner-all"><a href="/data/process">Indtast data</a></li>
					<li class="ui-state-default ui-corner-all"><a href="/municipalities">Download data</a></li>
					<li class="ui-state-default ui-corner-all"><a href="/users/logout">Log ud</a></li>
					<?php else : ?>
					<li class="ui-state-default ui-corner-all"><a href="/users/login">Log ind</a></li>
					<?php endif; ?>
			     </ul>
			</nav>
			</cake:nocache>
		</div>
	</header>

	<div class="span-24">
		<?php e($content_for_layout); ?>
	</div>
	<div class="clearfix"></div>

	<footer>
		<div class="prepend-top small quiet right">
			<a href="/pages/kolofon" class="quiet">Kolofon</a>
		</div>
	</footer>

</div>

<?php e($scripts_for_layout); ?>


</body>
</html>
