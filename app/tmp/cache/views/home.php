<!--cachetime:1298839162--><?php
			App::import('Controller', 'Maps');
			$controller =& new MapsController();
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize('a:5:{i:0;s:5:"Cache";i:1;s:10:"Javascript";i:2;s:7:"Session";i:3;s:4:"Html";i:4;s:4:"Form";}');
				$controller->base = $this->base = '';
				$controller->layout = $this->layout = 'default';
				$controller->webroot = $this->webroot = '/';
				$controller->here = $this->here = '/';
				$controller->params = $this->params = unserialize(stripslashes('a:9:{s:5:\"named\";a:0:{}s:4:\"pass\";a:0:{}s:10:\"controller\";s:4:\"maps\";s:6:\"plugin\";N;s:6:\"action\";s:5:\"index\";s:3:\"url\";a:2:{s:3:\"ext\";s:4:\"html\";s:3:\"url\";s:1:\"/\";}s:4:\"form\";a:0:{}s:6:\"isAjax\";b:0;s:6:\"models\";a:2:{i:0;s:4:\"Area\";i:1;s:6:\"Visual\";}}'));
				$controller->action = $this->action = unserialize('s:5:"index";');
				$controller->data = $this->data = unserialize(stripslashes('N;'));
				$controller->theme = $this->theme = '';
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
	<title>Det digitale landkort | KL</title>
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
		<div class="span-19 last">
			
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
			
		</div>
	</header>

	<div class="span-24">
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
				<li><a href="/?Area=151">Mobilruden</a> 100%</li><li><a href="/?Area=150">Børneruden</a> 100%</li><li><a href="/?Area=24">Digitale blanketter</a> 100%</li><li><a href="/?Area=25">Hjemmeside</a> 100%</li><li><a href="/?Area=64">Ny kontaktcenterløsning</a> 100%</li><li><a href="/?Area=217">Webshop</a> 100%</li><li><a href="/?Area=88">13. Meld dig rask</a> 100%</li><li><a href="/?Area=18">Nem refusion</a> 100%</li><li><a href="/?Area=219">Webgis</a> 99%</li><li><a href="/?Area=185">Vielse</a> 99%</li>			</ol>
			<form id="digiarea" method="get" action="/" accept-charset="utf-8"><b>Digitaliseringsområde</b><select name="Area" id="VisualArea">
<option value=""></option>
<option value="0">Kommunerne generelt</option>
<option value="2">Flytning</option>
<option value="3">Sundhedskort</option>
<option value="4">Pladsanvisning</option>
<option value="10">Pensionsguiden</option>
<option value="16">Borgerservice</option>
<option value="18">Nem refusion</option>
<option value="19">PAS</option>
<option value="20">Kørekort</option>
<option value="22">BørneIntra</option>
<option value="23">MitHørsholm</option>
<option value="24">Digitale blanketter</option>
<option value="25">Hjemmeside</option>
<option value="26">Sundhedsvejen</option>
<option value="28">Boligstøtte</option>
<option value="29">Din Barsel</option>
<option value="30">Skift læge</option>
<option value="31">Sygesikringsgruppe skifte</option>
<option value="33">NemPost</option>
<option value="34">Tilmeld betalinger til PBS</option>
<option value="35">Booking af kommunale ressourcer</option>
<option value="36">Giv et praj</option>
<option value="37">Tilmeld musikskole</option>
<option value="38">SMS advisering tandlægesystem</option>
<option value="39">Skat</option>
<option value="40">Udsatte børn og unge</option>
<option value="42">Bestil sundhedskort/lægeskift</option>
<option value="43">EU-Sygesikring</option>
<option value="46">Rotteanmeldelse</option>
<option value="49">Betal din kommune</option>
<option value="51">Borger online</option>
<option value="53">Foreningsportalen (Interbook)</option>
<option value="54">eDag3</option>
<option value="55">RenoWeb</option>
<option value="56">Affaldsservice</option>
<option value="57">parkeringslicenser</option>
<option value="58">Ansøg om brug af byens rum</option>
<option value="59">Barselsdagpenge</option>
<option value="64">Ny kontaktcenterløsning</option>
<option value="67">Udmelding af dagtilbud</option>
<option value="69">Byggesager</option>
<option value="71">Underholdsbidrag</option>
<option value="73">Meld dig rask</option>
<option value="75">Søg børnetilskud</option>
<option value="80">5. Anmeld bjørneklo</option>
<option value="85">10. Ansøg kontanthjælp</option>
<option value="86">11. Ansøg dagpenge</option>
<option value="88">13. Meld dig rask</option>
<option value="90">15. Ansøg om friplads i dagtilbud</option>
<option value="91">16. Søg børnetilskud</option>
<option value="92">17. Indskriv til skole og/eller fritidshjem</option>
<option value="93">18. Friplads i skolefritidsordning</option>
<option value="94">19. Ophør af fælles forældremyndighed</option>
<option value="98">23. Udbetaling/afkrævning af børnebidrag og ægtefællebidrag</option>
<option value="99">24. Tilskud til pasning af egne børn</option>
<option value="100">25. Anmeld kloakproblemer</option>
<option value="101">26. Parkeringslicens /tilladelse</option>
<option value="103">28. Registrering af motorkøretøjer mv.</option>
<option value="104">29. Aktindsigt</option>
<option value="105">30. Registerindsigt</option>
<option value="106">Efterløn</option>
<option value="107">32. Søg folkepension</option>
<option value="108">33. Beregn førtids -eller folkepension</option>
<option value="110">35. Søg førtidspension</option>
<option value="111">36. Konsekvensberegner - arbejde ved siden af pensionen</option>
<option value="114">39. Oplys om ændring af indkomstforhold</option>
<option value="115">40. Ansøg om lån eller garanti for lån til beboerindskud</option>
<option value="116">41. Befordringsgodtgørelse</option>
<option value="117">42. Forlængelse af opholds- eller arbejdstilladelse</option>
<option value="124">49. Skift læge eller sygesikringsgruppe</option>
<option value="125">50. Ansøg om hjemmehjælp</option>
<option value="128">53. Oversigt over privatskoler</option>
<option value="129">54. Sammenlign folkeskoler</option>
<option value="130">55. Find distriktskole</option>
<option value="131">56. Foreningsportalen</option>
<option value="132">57. Afregning af lokaletilskud jf. folkeoplysningsloven</option>
<option value="133">58. Godkendelse af folkeoplysende  forening</option>
<option value="134">59. Klag over din kommune</option>
<option value="135">60. Klag over forskelsbehandling</option>
<option value="136">61. Klag over hjemmehjælp</option>
<option value="137">62. Klag over p-afgift</option>
<option value="140">65. efterlevelseshjælp</option>
<option value="142">67. dødsfald</option>
<option value="143">68. Erklæring om skifte ved død</option>
<option value="144">69. Ansøg om enkeltydelse</option>
<option value="145">70. Ansøg om hjælpemiddel/forbrugsgode/boligindretning</option>
<option value="146">71. Ansøg om  helbredstillæg</option>
<option value="147">72. Ansøg om ældrecheck</option>
<option value="148">73. Ansøgning om militærnægtertjeneste</option>
<option value="150">Børneruden</option>
<option value="151">Mobilruden</option>
<option value="155">grus</option>
<option value="157">Anmeld fejl i gadebelysning</option>
<option value="159">Opdatering af hjemmeside i forhold til profilering af selvbetjeningsløsninger</option>
<option value="160">Import af tekster fra Borger.dk til hjemmeside</option>
<option value="162">Folkeregister</option>
<option value="164">Sygedagpenge</option>
<option value="165">Kultur - foreninger</option>
<option value="166">straXen.dk</option>
<option value="167">Digital Post</option>
<option value="168">Anmeld socialt bedrageri</option>
<option value="173">Bestil sundhedskort, EU-bevis samt lægeskift</option>
<option value="175">Anmeld fejl og mangler på veje og stier</option>
<option value="176">Bestil sundhedskort og EU-bevis</option>
<option value="177">Skift læge/sygesikringsgruppe</option>
<option value="179">Digital fripladsansøgning</option>
<option value="182">Børnetilskud</option>
<option value="185">Vielse</option>
<option value="187">Politikerportal</option>
<option value="188">Straksafklaring.www</option>
<option value="190">NenSMS i Genoptræning</option>
<option value="191">Test Odense</option>
<option value="192">NemSMS</option>
<option value="193">Pension</option>
<option value="195">Pas og kørekort</option>
<option value="197">Den digitale kommuneplan</option>
<option value="199">Straksudstedelse af NemId</option>
<option value="200">Foreningsportalen (digital afregning af tilskud)</option>
<option value="202">Udrulning og udbredelse af medarbejdernes kendskab til ’Sikker post’ funktionalitet og anvendelse</option>
<option value="203">Axiell Bibliotekssystem</option>
<option value="205">Anmeldelse af bygge- og anlægsaffald</option>
<option value="206">Beholderkontrol</option>
<option value="208">Begravelseshjælp</option>
<option value="209">Forbrugsafgifter</option>
<option value="210">Øvrige</option>
<option value="211">nemID</option>
<option value="212">Kommunikation med forældre i dagtilbudsområdet</option>
<option value="213">Kommunikation med forældre på skoleområdet</option>
<option value="214">Skoleområdet generelt</option>
<option value="217">Webshop</option>
<option value="218">eJob</option>
<option value="219">Webgis</option>
<option value="220">Ansøgning om hjælpemidler</option>
<option value="221">Ansøgning om plejebolig</option>
<option value="222">BØT-erklæringer</option>
<option value="223">Pensionsområdet (ej førtidspension)</option>
<option value="224">Helbredstillæg</option>
<option value="225">Børnefamilieydelser</option>
<option value="226">KontaktCenter</option>
<option value="227">Stillingsopslag</option>
<option value="228">Forsikrede ledige</option>
<option value="229">Veje</option>
<option value="230">Lokaleudlån</option>
<option value="232">Byrådsservice</option>
<option value="233">Ferieaktiviteter for børn</option>
<option value="234">pendlerordning</option>
<option value="235">Vurderingsfortegnelsen</option>
<option value="236">Mit HNG</option>
</select></form>			<div class="prepend-top">
				<form method="get" action="/" accept-charset="utf-8"><b>Andre visualiseringer</b><br /><select id="Visuals" name="visual_id"><option></option><optgroup label="Digitale ambassadører" data-groupid="1"><option value="10">KLs kurser</option></optgroup><optgroup label="Bedst på Nettet" data-groupid="2"><option value="4">Netkroner</option><option value="9">Samlet pointscore i %</option><option value="6">Brugervurdering, point i %</option><option value="7">Screening, point i %</option><option value="8">Selvevaluering, point i %</option></optgroup></select></form>			</div>
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
	</div>
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

	google.load("maps", "3", {callback: map3.init, language: "da", other_params: "sensor=false"});

//]]>
</script>

</body>
</html>
