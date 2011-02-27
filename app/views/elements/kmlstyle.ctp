<Style id="<?php e($kmldomid); ?>">
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
		<color><?php e($polyColor); ?></color>
	</PolyStyle>
	<BalloonStyle>
		<text>
			<![CDATA[
				<h3><?php e($name); ?></h3>
				<dl>
					<dt>Digitaliseringsgrad</dt>
					<dd><?php e($digirate); ?>%</dd>
					<dt>Har kommunen en kanalstrategi?</dt>
					<dd><?php echo(yesno($munip['Process'][count($munip['Process']) - 1]['channelstrategy'])); ?> <?php e(empty($strategy) ? '' : $html->link($strategy, $strategy)); ?></dd>
					<dt>Følger kommunen den fælleskommunale dokumentationsmetode?</dt>
					<dd><?php echo(yesno($munip['Process'][count($munip['Process']) - 1]['docmethod'])); ?></dd>
					<dt>Har kommunen klart placeret ansvaret for realiseringen af e2012-visionen?</dt>
					<dd><?php echo(yesno($munip['Process'][count($munip['Process']) - 1]['organisation'])); ?></dd>
					<dt>Arbejder kommunen med kompetenceudvikling af sine frontmedarbejdere, som skal sikre at de kan udfylde rollen som digitale ambassadører, der lærer borgerne at betjene sig selv digitalt?</dt>
					<dd><?php echo(yesno($munip['Process'][count($munip['Process']) - 1]['ambassadors'])); ?></dd>
					<dt>Kontaktperson</dt><?php $mail = $munip['Process'][count($munip['Process']) - 1]['organisation_person']; ?>
					<dd><a href="mailto:<?php echo($mail); ?>"><?php echo($mail); ?></a></dd>
				</dl>
				<p>
					<h4>Digitaliseringsområder</h4>
					<?php e($html->nestedList($areas));	?>
				</p>
			]]>
		</text>	
	</BalloonStyle>
</Style>
