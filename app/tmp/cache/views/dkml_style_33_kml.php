<!--cachetime:1297928410--><?php
			App::import('Controller', 'Dkml');
			$controller =& new DkmlController();
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize('a:5:{i:0;s:3:"xml";i:1;s:5:"Cache";i:2;s:7:"Session";i:3;s:4:"Html";i:4;s:4:"Form";}');
				$controller->base = $this->base = '';
				$controller->layout = $this->layout = 'default';
				$controller->webroot = $this->webroot = '/';
				$controller->here = $this->here = '/dkml/style/33.kml';
				$controller->params = $this->params = unserialize(stripslashes('a:9:{s:10:\"controller\";s:4:\"dkml\";s:6:\"action\";s:5:\"style\";s:5:\"named\";a:0:{}s:4:\"pass\";a:1:{i:0;s:2:\"33\";}s:6:\"plugin\";N;s:3:\"url\";a:2:{s:3:\"ext\";s:3:\"kml\";s:3:\"url\";s:18:\"/dkml/style/33.kml\";}s:4:\"form\";a:0:{}s:6:\"isAjax\";b:0;s:6:\"models\";a:2:{i:0;s:12:\"Municipality\";i:1;s:6:\"Visual\";}}'));
				$controller->action = $this->action = unserialize('s:5:"style";');
				$controller->data = $this->data = unserialize(stripslashes('N;'));
				$controller->theme = $this->theme = '';
				Router::setRequestInfo(array($this->params, array('base' => $this->base, 'webroot' => $this->webroot)));
				$controller->constructClasses();
				$controller->Component->initialize($controller);
				$controller->beforeFilter();
				$controller->Component->startup($controller);
				$loadedHelpers = array();
				$loadedHelpers = $this->_loadHelpers($loadedHelpers, $this->helpers);
				foreach (array_keys($loadedHelpers) as $helper) {
					$camelBackedHelper = Inflector::variable($helper);
					${$camelBackedHelper} =& $loadedHelpers[$helper];
					$this->loaded[$camelBackedHelper] =& ${$camelBackedHelper};
					$this->{$helper} =& $loadedHelpers[$helper];
				}
		?><?php echo '<?xml';?> version="1.0" encoding="UTF-8" ?>
<kml xmlns="http://www.opengis.net/kml/2.2">
<Document>
<name><![CDATA[Styles for KML]]></name>
<Style id="aabenraa">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Aabenraa</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:cbg@aabenraa.dk">cbg@aabenraa.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Boligstøtte</li><li>Affaldsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="aalborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Aalborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="albertslund">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Albertslund</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.albertslund.dk/Politik/Visionogpolitikker/Borgerbetjening/Kanalstrategi.aspx">http://www.albertslund.dk/Politik/Visionogpolitikker/Borgerbetjening/Kanalstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:pernille.harting.frandsen@albertslund.dk">pernille.harting.frandsen@albertslund.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Sundhedskort</li><li>Pladsanvisning</li><li>Rotteanmeldelse</li><li>Barselsdagpenge</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="alleroed">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Allerød</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:angl@alleroed.dk">angl@alleroed.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pensionsguiden</li><li>PAS</li><li>Skoleindskrivning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="aarhus">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Århus</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.aarhuskommune.dk/~/media/Dokumenter/Borgmesterens-Afdeling/Budget-og-Regnskab/Sparekatalog-2011/Baggrundsnotater/Kanalstrategi-for-Aarhus-Kommune.ashx">http://www.aarhuskommune.dk/~/media/Dokumenter/Borgmesterens-Afdeling/Budget-og-Regnskab/Sparekatalog-2011/Baggrundsnotater/Kanalstrategi-for-Aarhus-Kommune.ashx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:bv@aarhus.dk">bv@aarhus.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Sundhedskort</li><li>Boligstøtte</li><li>Pension</li><li>Byrådsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="assens">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Assens</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="/dkml/www.assens.dk">www.assens.dk</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:pijen@assens.dk">pijen@assens.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Hjemmeside</li><li>Boligstøtte</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="ballerup">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ballerup</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:amb@balk.dk">amb@balk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>32. Søg folkepension</li><li>51.  Bestil EU-sygesikringskort</li><li>Flytning</li><li>Sundhedskort</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="billund">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Billund</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="/dkml/www.kl.dk/test">www.kl.dk/test</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:aln@kl.dk">aln@kl.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="bornholm">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Bornholm Regions</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:Finn.Bruun.Jensen@brk.dk">Finn.Bruun.Jensen@brk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="broendby">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Brøndby</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="broenderslev">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Brønderslev</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.bronderslev.dk/TopMenu/RadhusPolitik/Strategier_og_politikker/Kanalstrategi.aspx">http://www.bronderslev.dk/TopMenu/RadhusPolitik/Strategier_og_politikker/Kanalstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:Karsten.Bach@99454545.dk">Karsten.Bach@99454545.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Boligstøtte</li><li>Søg underholdsbidrag</li><li>Axiell Bibliotekssystem</li><li>Anmeldelse af bygge- og anlægsaffald</li><li>Beholderkontrol</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="dragoer">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Dragør</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="egedal">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Egedal</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:pet.hansen@egekom.dk">pet.hansen@egekom.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Skoleindskrivning</li><li>Underholdsbidrag</li><li>Vielse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="esbjerg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Esbjerg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.esbjergkommune.dk/om-kommunen/politikker/retningslinjer/kanalstrategi.aspx">http://www.esbjergkommune.dk/om-kommunen/politikker/retningslinjer/kanalstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jr@esbjergkommune.dk">jr@esbjergkommune.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>PAS</li><li>Webshop</li><li>eJob</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="faaborgmidtfyn">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Faaborg-Midtfyn</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:peban@faaborgmidtfyn.dk">peban@faaborgmidtfyn.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>33. Beregn førtids -eller folkepension</li><li>51.  Bestil EU-sygesikringskort</li><li>Flytning</li><li>Sundhedskort</li><li>Nem refusion</li><li>Din Barsel</li><li>Anmeld huller i vejen</li><li>Digital Post</li><li>Straksudstedelse af NemId</li><li>nemID</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="fanoe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Fanø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:om@fanoe.dk">om@fanoe.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>11. Ansøg dagpenge</li><li>20. Fortsat udbetaling af børnebidrag og ægtefællebidrag</li><li>51.  Bestil EU-sygesikringskort</li><li>Flytning</li><li>Sundhedskort</li><li>Boligstøtte</li><li>Sygesikringsgruppe skifte</li><li>Barselsdagpenge</li><li>Børnetilskud</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="favrskov">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Favrskov</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Pladsanvisning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="faxe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Faxe</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:pehg@faxekommune.dk">pehg@faxekommune.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="fredensborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Fredensborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Folkeregister</li><li>Byggesager</li><li>Sygedagpenge</li><li>Kultur - foreninger</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="fredericia">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Fredericia</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mogens.bak.hansen@fredericia.dk">mogens.bak.hansen@fredericia.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Bestil blåt sundhedskort</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="frederiksberg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Frederiksberg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:thgl01@frederiksberg.dk">thgl01@frederiksberg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>26. Parkeringslicens /tilladelse</li><li>Flytning</li><li>Opdatering af hjemmeside i forhold til profilering af selvbetjeningsløsninger</li><li>Import af tekster fra Borger.dk til hjemmeside</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="frederikshavn">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Frederikshavn</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:laso@frederikshavn.dk">laso@frederikshavn.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Sundhedskort</li><li>Giv et praj</li><li>Rotteanmeldelse</li><li>Kommunikation med forældre i dagtilbudsområdet</li><li>Kommunikation med forældre på skoleområdet</li><li>Skoleområdet generelt</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="frederikssund">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Frederikssund</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.frederikssund.dk/content/dk/generelle_kommuneoplysninger/om_kommunen/politikker">http://www.frederikssund.dk/content/dk/generelle_kommuneoplysninger/om_kommunen/politikker</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:bchri@frederikssund.dk">bchri@frederikssund.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Indskrivning til skoler</li><li>Bestil blåt sundhedskort</li><li>Opskrivning til daginstitution</li><li>Rotteanmeldelse</li><li>RenoWeb</li><li>Ansøgning om hjælpemidler</li><li>Ansøgning om plejebolig</li><li>KontaktCenter</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="furesoe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Furesø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:ush@furesoe.dk">ush@furesoe.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Indskrivning til skoler</li><li>Rotteanmeldelse</li><li>Ny kontaktcenterløsning</li><li>Opdatering af hjemmeside i forhold til profilering af selvbetjeningsløsninger</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="gentofte">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Gentofte</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.gentofte.dk/upload/pdf/e2012%20kanalstrategi%20til%20det%20digitale%20landkort.pdf">http://www.gentofte.dk/upload/pdf/e2012%20kanalstrategi%20til%20det%20digitale%20landkort.pdf</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:hjpn@gentofte.dk">hjpn@gentofte.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Digital skoleindskrivning</li><li>Digital byggesag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="gladsaxe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Gladsaxe</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:lars.meirup@gladsaxe.dk">lars.meirup@gladsaxe.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Sundhedskort</li><li>Pladsanvisning</li><li>Affaldsservice</li><li>Bestil EU-sygesikringskort</li><li>Underholdsbidrag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="glostrup">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Glostrup</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:henrik.nellager@glostrup.dk">henrik.nellager@glostrup.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="greve">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Greve</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="http://greve.dk/Greve/Politik%20og%20demokrati/Politikker%20og%20maalsaetninger/Borgerhenvendelsesstrategi.aspx">http://greve.dk/Greve/Politik%20og%20demokrati/Politikker%20og%20maalsaetninger/Borgerhenvendelsesstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jss@greve.dk">jss@greve.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>51.  Bestil EU-sygesikringskort</li><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Pladsanvisning</li><li>Digital Post</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="gribskov">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Gribskov</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:vstee@gribskov.dk">vstee@gribskov.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="guldborgsund">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Guldborgsund</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.guldborgsund.dk/da/Politik/~/media/Filer/Politikker%20og%20strategier/Kanalstrategi%202010.ashx">http://www.guldborgsund.dk/da/Politik/~/media/Filer/Politikker%20og%20strategier/Kanalstrategi%202010.ashx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:lark@guldborgsund.dk">lark@guldborgsund.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Din Barsel</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="haderslev">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Haderslev</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jckh@haderslev.dk">jckh@haderslev.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="halsnaes">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Halsnæs</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:tosf@halsnaes.dk">tosf@halsnaes.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>PAS</li><li>Borger online</li><li>Straks udstedelse af NemID</li><li>Børnetilskud</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hedensted">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Hedensted</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jesper.overgaard@hedensted.dk">jesper.overgaard@hedensted.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Ferieaktiviteter for børn</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="helsingoer">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Helsingør</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:thj10@helsingor.dk">thj10@helsingor.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Digital Post</li><li>Straksudstedelse af NemId</li><li>Foreningsportalen (digital afregning af tilskud)</li><li>Pas/kørekort</li><li>Udrulning og udbredelse af medarbejdernes kendskab til ’Sikker post’ funktionalitet og anvendelse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="herlev">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Herlev</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="herning">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Herning</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://bit.ly/cUmgBz">http://bit.ly/cUmgBz</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:ituho@herning.dk">ituho@herning.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Pas/kørekort</li><li>nemID</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hilleroed">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Hillerød</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mila@hillerod.dk">mila@hillerod.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hjoerring">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Hjørring</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:julie.ravn@hjoerring.dk">julie.ravn@hjoerring.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>EU-Sygesikring</li><li>Søg underholdsbidrag</li><li>Opskrivning til dagtilbud</li><li>Udmelding af dagtilbud</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="holbaek">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Holbæk</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jak@holb.dk">jak@holb.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Din Barsel</li><li>Underholdsbidrag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="holstebro">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Holstebro</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:Per.Jensen@holstebro.dk">Per.Jensen@holstebro.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="horsens">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Horsens</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:niro@horsens.dk">niro@horsens.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Webgis</li><li>Lokaleudlån</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hvidovre">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Hvidovre</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:juc@hvidovre.dk">juc@hvidovre.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>EU-Sygesikring</li><li>Rotteanmeldelse</li><li>Affaldsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hoejetaastrup">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Høje-Taastrup</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="hoersholm">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Hørsholm</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.horsholm.dk/Om-kommunen/Om-Hoersholm-Kommune/kommunens-strategier/Kanalstrategi">http://www.horsholm.dk/Om-kommunen/Om-Hoersholm-Kommune/kommunens-strategier/Kanalstrategi</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jilf@horsholm.dk">jilf@horsholm.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>BørneIntra</li><li>MitHørsholm</li><li>Digitale blanketter</li><li>Digitalt byggesagsarkiv</li><li>Digital Post</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="ikastbrande">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ikast-Brande</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:lesko@ikast-brande.dk">lesko@ikast-brande.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="ishoej">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ishøj</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jnm@ishoj.dk">jnm@ishoj.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="jammerbugt">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Jammerbugt</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="/dkml/www.jammerbugt.dk/kanalstrategi">www.jammerbugt.dk/kanalstrategi</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mvm@jammerbugt.dk">mvm@jammerbugt.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Boligstøtte</li><li>Straks udstedelse af NemID</li><li>Byggesager</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="kalundborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Kalundborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:peter.trebbien@kalundborg.dk">peter.trebbien@kalundborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Digitale blanketter</li><li>Digital skoleindskrivning</li><li>Digital Post</li><li>Bestil sundhedskort, EU-bevis samt skift læge</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="kerteminde">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Kerteminde</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:dha@kerteminde.dk">dha@kerteminde.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>49. Skift læge eller sygesikringsgruppe</li><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Pladsanvisning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="kolding">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Kolding</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="koebenhavn">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>København</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.kk.dk/FaktaOmKommunen/Serviceydelser/~/media/548B7029C7514E7CAAE6B5B96330A42F.ashx">http://www.kk.dk/FaktaOmKommunen/Serviceydelser/~/media/548B7029C7514E7CAAE6B5B96330A42F.ashx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:bi2x@okf.kk.dk">bi2x@okf.kk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>Affaldsservice</li><li>parkeringslicenser</li><li>Barselsdagpenge</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="koege">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Køge</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:peter.ravnholt@koege.dk">peter.ravnholt@koege.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>20. Fortsat udbetaling af børnebidrag og ægtefællebidrag</li><li>49. Skift læge eller sygesikringsgruppe</li><li>51.  Bestil EU-sygesikringskort</li><li>Flytning</li><li>Sundhedskort</li><li>Rotteanmeldelse</li><li>Affaldsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="langeland">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Langeland</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:kd@langelandkommune.dk">kd@langelandkommune.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Bestil blåt sundhedskort</li><li>Skift læge</li><li>Bestil sundhedskort/lægeskift</li><li>Rotteanmeldelse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="lejre">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Lejre</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.lejre.dk/page7188.aspx">http://www.lejre.dk/page7188.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jely@lejre.dk">jely@lejre.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Bestil blåt sundhedskort</li><li>Digitale blanketter</li><li>Digitalt byggesagsarkiv</li><li>Politikerportal</li><li>Straksafklaring.www</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="lemvig">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Lemvig</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:thomas.hyldgaard@lemvig.dk">thomas.hyldgaard@lemvig.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Bestil sundhedskort/lægeskift</li><li>EU-Sygesikring</li><li>Opskrivning til daginstitution</li><li>Søg underholdsbidrag</li><li>Rotteanmeldelse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="lolland">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Lolland</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="lyngbytaarbaek">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Lyngby-Taarbæk</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:loa@ltk.dk">loa@ltk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Indskrivning til skoler</li><li>Boligstøtte</li><li>Meld dig rask</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="laesoe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Læsø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pas og kørekort</li><li>Ansøgning om dagtilbud</li><li>Begravelseshjælp</li><li>Forbrugsafgifter</li><li>Øvrige</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="mariagerfjord">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Mariagerfjord</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:midah@mariagerfjord.dk">midah@mariagerfjord.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="middelfart">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Middelfart</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="http://www.middelfart.dk/Om%20kommunen/Virksomhedsplaner.aspx">http://www.middelfart.dk/Om%20kommunen/Virksomhedsplaner.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:terkel.knudsen@middelfart.dk">terkel.knudsen@middelfart.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Søg fortsat underholdsbidrag</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Bestil blåt sundhedskort</li><li>Hjemmeside</li><li>Boligstøtte</li><li>Skift læge</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="morsoe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Morsø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="norddjurs">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Norddjurs</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="nordfyn">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Nordfyn</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mih@nordfynskommune.dk">mih@nordfynskommune.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>15. Ansøg om friplads i dagtilbud</li><li>16. Søg børnetilskud</li><li>20. Fortsat udbetaling af børnebidrag og ægtefællebidrag</li><li>23. Udbetaling/afkrævning af børnebidrag og ægtefællebidrag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="nyborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Nyborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="/dkml/www.nyborg.dk">www.nyborg.dk</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:tho@nyborg.dk">tho@nyborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Rotteanmeldelse</li><li>Søg om underholdsbidrag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="naestved">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Næstved</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="odder">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Odder</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mette.larsen@odder.dk">mette.larsen@odder.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Pladsanvisning</li><li>Pensionsguiden</li><li>Søg underholdsbidrag</li><li>Digital Post</li><li>Børnetilskud</li><li>Blåt og Gult Sygesikringskort</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="odense">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Odense</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.odense.dk/web4/e2012/maalinger%20og%20kanalstrategi.aspx">http://www.odense.dk/web4/e2012/maalinger%20og%20kanalstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:bihp@odense.dk">bihp@odense.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Nem refusion</li><li>Hjemmeside</li><li>Digital Post</li><li>NenSMS i Genoptræning</li><li>BØT-erklæringer</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="odsherred">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Odsherred</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="/dkml/www.odsherred.dk/politikker">www.odsherred.dk/politikker</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:thuj@odsherred.dk">thuj@odsherred.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Boligstøtte</li><li>Underholdsbidrag</li><li>Pensionsområdet (ej førtidspension)</li><li>Helbredstillæg</li><li>Børnefamilieydelser</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="randers">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Randers</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:swk@randers.dk">swk@randers.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>51.  Bestil EU-sygesikringskort</li><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Skoleindskrivning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="rebild">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Rebild</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:clho@rebild.dk">clho@rebild.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Pladsanvisning</li><li>PAS</li><li>Digital Post</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="ringkoebingskjern">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ringkøbing-Skjern</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:hanne.hinge@rksk.dk">hanne.hinge@rksk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>51.  Bestil EU-sygesikringskort</li><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="ringsted">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ringsted</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:thhy@ringsted.dk">thhy@ringsted.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>Skat</li><li>eDag3</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="roskilde">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Roskilde</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.roskilde.dk/webtop/site.aspx?p=7168&amp;link=byraad_udvalg/Oekonomiudvalget2010/Oversigter/Oekonomiudvalget20102010.htm">http://www.roskilde.dk/webtop/site.aspx?p=7168&amp;link=byraad_udvalg/Oekonomiudvalget2010/Oversigter/Oekonomiudvalget20102010.htm</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jetter@roskilde.dk">jetter@roskilde.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Søg fortsat underholdsbidrag</li><li>Flytning</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Pensionsguiden</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="rudersdal">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Rudersdal</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.rudersdal.dk/Kommunen/Politik/Politikker/Digitaliseringstrategi.aspx ">http://www.rudersdal.dk/Kommunen/Politik/Politikker/Digitaliseringstrategi.aspx </a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:ripa@rudersdal.dk">ripa@rudersdal.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>PAS</li><li>Straks udstedelse af NemID</li><li>Byggesager</li><li>Børneruden</li><li>Mobilruden</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="roedovre">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Rødovre</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:kim.jensen@rk.dk">kim.jensen@rk.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Digitale blanketter</li><li>Booking af kommunale ressourcer</li><li>Digital Post</li><li>Udrulning og udbredelse af medarbejdernes kendskab til ’Sikker post’ funktionalitet og anvendelse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="samsoe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Samsø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="silkeborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Silkeborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.silkeborgkommune.dk/kommunen/udvikling+og+projekter+i+silkeborg+kommune/e2012/service-+og+kanalstrategi+2010-2015 ">http://www.silkeborgkommune.dk/kommunen/udvikling+og+projekter+i+silkeborg+kommune/e2012/service-+og+kanalstrategi+2010-2015 </a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:heidi.duus@silkeborg.dk">heidi.duus@silkeborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>51.  Bestil EU-sygesikringskort</li><li>56. Foreningsportalen</li><li>Flytning</li><li>Den digitale kommuneplan</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="skanderborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Skanderborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:kenni.sorensen@skanderborg.dk">kenni.sorensen@skanderborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>15. Ansøg om friplads i dagtilbud</li><li>47. Lægevalg udover 15 km afstand</li><li>51.  Bestil EU-sygesikringskort</li><li>66. begravelseshjælp</li><li>Flytning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="skive">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Skive</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mihv@skivekommune.dk">mihv@skivekommune.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>23. Udbetaling/afkrævning af børnebidrag og ægtefællebidrag</li><li>Flytning</li><li>Pladsanvisning</li><li>Bestil blåt sundhedskort</li><li>Rotteanmeldelse</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="slagelse">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Slagelse</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mican@slagelse.dk">mican@slagelse.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Affaldsservice</li><li>Byggesager</li><li>Underholdsbidrag</li><li>Ansøg sygedagpenge</li><li>Søg børnetilskud</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="solroed">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Solrød</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="soroe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Sorø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://sorø.dk/cms/site.aspx?p=5143">http://sorø.dk/cms/site.aspx?p=5143</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:mevr@soroe.dk">mevr@soroe.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Pladsanvisning</li><li>Digitale blanketter</li><li>Straks udstedelse af NemID</li><li>straXen.dk</li><li>Digital Post</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="stevns">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Stevns</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:usager@stevns.dk">usager@stevns.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>9. Ansøg sygedagpenge</li><li>12. Ansøg barselsdagpenge</li><li>13. Meld dig rask</li><li>63. vielse</li><li>66. begravelseshjælp</li><li>Pladsanvisning</li><li>Rotteanmeldelse</li><li>Affaldsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="struer">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Struer</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:hb@struer.dk">hb@struer.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Digitale blanketter</li><li>Digitalt byggesagsarkiv</li><li>NemPost</li><li>Udsatte børn og unge</li><li>Byggesager</li><li>Opdatering af hjemmeside i forhold til profilering af selvbetjeningsløsninger</li><li>Digital Post</li><li>Foreningsportalen (digital afregning af tilskud)</li><li>Webgis</li><li>Byrådsservice</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="svendborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Svendborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="/dkml/www.svendborg.dk">www.svendborg.dk</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:oktnit@svendborg.dk">oktnit@svendborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Opskriv til daginstitution</li><li>Bestil EU-sygesikringskort</li><li>Ny kontaktcenterløsning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="syddjurs">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Syddjurs</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:lerii@syddjurs.dk">lerii@syddjurs.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Bestil blåt sundhedskort</li><li>PAS</li><li>Opskrivning til dagtilbud</li><li>Søg om underholdsbidrag</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="soenderborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Sønderborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:eknx@sonderborg.dk">eknx@sonderborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Digitale blanketter</li><li>Digital Post</li><li>NemSMS</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="taarnby">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Tårnby</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:seo.of@taarnby.dk">seo.of@taarnby.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Bestil EU-sygesikringskort</li><li>Digital byggesag</li><li>Digital fripladsansøgning</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="thisted">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Thisted</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="toender">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Tønder</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:bjo@toender.dk">bjo@toender.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Underholdsbidrag</li><li>Sygedagpenge</li><li>Ansøgning om hjælpemidler</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="vallensbaek">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Vallensbæk</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.vallensbaek.dk/Page-52525.aspx">http://www.vallensbaek.dk/Page-52525.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jg@vallensbaek.dk">jg@vallensbaek.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>Flytning</li><li>Sundhedskort</li><li>Straks udstedelse af NemID</li><li>Foreningsportalen (Interbook)</li><li>Dagtilbud</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="varde">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Varde</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej <a href="/dkml/TEST af det digitale landkort">TEST af det digitale landkort</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:ruol@varde.dk">ruol@varde.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>9. Ansøg sygedagpenge</li><li>14. Opskriv til daginstitution</li><li>Flytning</li><li>Byggesager</li><li>Stillingsopslag</li><li>Forsikrede ledige</li><li>Veje</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="vejen">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Vejen</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Ja <a href="http://www.vejenkom.dk/Topmenu/DetPolitiskeLiv/Politikker/Kanalstrategi.aspx">http://www.vejenkom.dk/Topmenu/DetPolitiskeLiv/Politikker/Kanalstrategi.aspx</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jp@vejenkom.dk">jp@vejenkom.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>5. Anmeld bjørneklo</li><li>Flytning</li><li>Pladsanvisning</li><li>Bestil blåt sundhedskort</li><li>Søg underholdsbidrag</li><li>Rotteanmeldelse</li><li>Affaldsservice</li><li>Anmeld huller i vejen</li><li>Anmeld fejl i gadebelysning</li><li>ansøg om begravelseshjælp</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="vejle">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Vejle</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:fraol@vejle.dk">fraol@vejle.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="vesthimmerland">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Vesthimmerland</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:kfh@vesthimmerland.dk">kfh@vesthimmerland.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>5. Anmeld bjørneklo</li><li>51.  Bestil EU-sygesikringskort</li><li>Sundhedskort</li><li>Pladsanvisning</li><li>Digitale blanketter</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="viborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Viborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Ja</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:caa@viborg.dk">caa@viborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>14. Opskriv til daginstitution</li><li>21. Optagelse i skolefritidsordningen</li><li>Flytning</li><li>Sundhedskort</li><li>parkeringslicenser</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="vordingborg">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Vordingborg</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>På vej <a href="/dkml/www.vordingborg.dk">www.vordingborg.dk</a></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Ja</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Ja</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>På vej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:jewu@vordingborg.dk">jewu@vordingborg.dk</a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul><li>66. begravelseshjælp</li><li>Flytning</li><li>Pladsanvisning</li><li>Indskrivning til skoler</li><li>Giv et praj</li></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
<Style id="aeroe">
	<IconStyle>
		<scale>0</scale>
		<Icon>
			<href>http://maps.gstatic.com/intl/da_ALL/mapfiles/transparent.png</href>
		</Icon>
	</IconStyle>
	<LineStyle>
		<color>ff666666</color>
		<width>1</width>
	</LineStyle>
	<PolyStyle>
		<color>80c0c0c0</color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3>Ærø</h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd>0%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd>Nej </dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd>Nej</dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd>Nej</dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd>Nej</dd>
					<dt>Kontaktperson</dt>					<dd><a href="mailto:"></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<ul></ul>				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
</Document>
</kml>