<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php e($title_for_layout); ?> | Det digitale landkort | KL</title>
	<link rel="stylesheet" href="/css/cake.generic.css" type="text/css" title="CakePHP">
</head>
<body>

<div id="container">

	<div id="header">
		<header>
			<h1><a href="/">Det digitale landkort</a></h1>
		</header>
	</div>

	<div id="content"><?php
		$session->flash();
		$session->flash('auth');
		e($content_for_layout);
	?></div>

</div>

</body>
</html>
