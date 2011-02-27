<!--cachetime:1298839338--><?php
			App::import('Controller', 'Maps');
			$controller =& new MapsController();
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize('a:5:{i:0;s:5:"Cache";i:1;s:10:"Javascript";i:2;s:7:"Session";i:3;s:4:"Html";i:4;s:4:"Form";}');
				$controller->base = $this->base = '';
				$controller->layout = $this->layout = 'default';
				$controller->webroot = $this->webroot = '/';
				$controller->here = $this->here = '/bpn';
				$controller->params = $this->params = unserialize(stripslashes('a:9:{s:5:\"named\";a:0:{}s:4:\"pass\";a:0:{}s:10:\"controller\";s:4:\"maps\";s:6:\"action\";s:3:\"bpn\";s:6:\"plugin\";N;s:3:\"url\";a:2:{s:3:\"ext\";s:4:\"html\";s:3:\"url\";s:4:\"/bpn\";}s:4:\"form\";a:0:{}s:6:\"isAjax\";b:0;s:6:\"models\";a:2:{i:0;s:4:\"Area\";i:1;s:6:\"Visual\";}}'));
				$controller->action = $this->action = unserialize('s:3:"bpn";');
				$controller->data = $this->data = unserialize(stripslashes('N;'));
				$controller->theme = $this->theme = 'bpn';
				Router::setRequestInfo(array($this->params, array('base' => $this->base, 'webroot' => $this->webroot)));
				$loadedHelpers = array();
				$loadedHelpers = $this->_loadHelpers($loadedHelpers, $this->helpers);
				foreach (array_keys($loadedHelpers) as $helper) {
					$camelBackedHelper = Inflector::variable($helper);
					${$camelBackedHelper} =& $loadedHelpers[$helper];
					$this->loaded[$camelBackedHelper] =& ${$camelBackedHelper};
					$this->{$helper} =& $loadedHelpers[$helper];
				}
		?><!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8" />
	<title>Bedst på Nettet | Det digitale landkort | KL</title>
	<link rel="stylesheet" href="/css/blueprint/blueprint/screen.css" media="screen, projection" />
	<link rel="stylesheet" href="/css/blueprint/blueprint/print.css" media="print" />
	<!--[if lt IE 8]><link rel="stylesheet" href="/css/blueprint/blueprint/ie.css" media="screen, projection" /><![endif]-->
	<link rel="stylesheet" href="/css/custom.css" media="screen, projection" />
	<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAPXCklq_IpLlU0vx0Q9KPnxTKcJNBuIitOpLOaE51qF-O-_dJABTxLYD2x3sB1Xf-Amnsg3t2aq5UwQ"></script>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/smoothness/jquery-ui.css" media="screen, projection" />
</head>
<body>

<div class="container prepend-top append-bottom">

	<header>
		<div id="logo" class="span-4 append-1">
			<a href="/"><img src="/img/e2012.png" alt="E2012" /></a>
			<h1 class="hide"><a href="/">Det digitale landkort</a></h1>
		</div>
		<div class="span-7">
			<a href="/bpn"><img src="/img/bpn.png" alt="Bedst på Nettet logo" /></a>
			<h1 class="hide"><a href="/bpn">Bedst på Nettet</a></h1>
		</div>
		<div class="span-12 last">
			<nav>
			     <ul>
					<li class="ui-state-default ui-corner-all"><a href="/">Forsiden</a></li>
					<li class="ui-state-default ui-corner-all"><a href="/bpn">Bedst på Nettet</a></li>
			     </ul>
			</nav>
		</div>
	</header>

	<div class="span-24">
		
<nav class="flatmenu">
	<ul>
	<li><a href="/bpn?visual_id=4">Netkroner</a></li><li><a href="/bpn?visual_id=9">Samlet pointscore i %</a></li><li><a href="/bpn?visual_id=6">Brugervurdering, point i %</a></li><li><a href="/bpn?visual_id=7">Screening, point i %</a></li><li><a href="/bpn?visual_id=8">Selvevaluering, point i %</a></li>	</ul>
</nav>

<section>
	<div class="span-24 prepend-top append-bottom">
		<div id="map-container">
			<div id="map"></div>
			<div id="overlay" class="transparent"></div>
		</div>
	</div>
</section>	</div>
	<div class="clearfix"></div>

	<footer>
		<div class="prepend-top small quiet right">
			<a href="/pages/kolofon" class="quiet">Kolofon</a>
		</div>
	</footer>

</div>

<script src="/js/custom.js"></script>
<script type="text/javascript">
//<![CDATA[

	map3.visual_id = 4;
	google.load("maps", "3", {callback: map3.init, language: "da", other_params: "sensor=false"});

//]]>
</script>

</body>
</html>
