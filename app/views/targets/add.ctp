
<?php e($html->tag('h2', $title_for_layout)); ?>

<div class="span-6">
	<div class="box">
		<dl>
			<dt>Kommune</dt>
			<dd><?php e($mun['Municipality']['name']); ?></dd>
			<dt>Seneste indtastning</dt>
			<dd><?php e( empty($latestTarget['modified']) ? '-' : $time->niceShort($latestTarget['modified']) ); ?></dd>
		</dl>
	</div>
</div>
<div class="span-17 prepend-1 last">
		<h3>Digitaliseringsområder</h3>
		<a href="/areas_municipalities/add/<?php e($mun['Municipality']['id']); ?>">Angiv digitaliseringsområder</a>
</div>
<div class="clear"></div>

<?php

$session->flash();

e($form->create('Target'));

e($form->input('Target.municipality_id', array('type' => 'hidden')));

/* Todo: tab only to most used fields */

e('<fieldset>');
e('<legend>Digitaliseringsområde</legend>');
e('<p>Angiv data for kommunen generelt eller vælg digitaliseringsområde.</p>');
// digital area
e('<div class="span-23">');
e($form->input('Target.area_id', array(
	'type' => 'radio',
	'options' => $digiareas,
	'legend' => false
)));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Hjemmesidebesøg</legend>');
e('<p>Angiv hvor mange unikke besøgende kommunen har haft på hjemmesiden.</p>');
// visitors
e('<div class="span-8">');
e($form->input('visitors', array(
	'type' => 'text',
	'label' => 'Antal unikke besøgende',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'visitors')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'visitors')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Selvbetjening</legend>');
e('<p>Angiv hvor mange gange jeres løsning(-er) til selvbetjening er blevet anvendt.</p>');
// usage
e('<div class="span-8 append-bottom">');
e($form->input('selfservice', array(
	'type' => 'text',
	'label' => 'Antal påbegyndte selvbetjeningstransaktioner',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'selfservice')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'selfservice')));
e('</div>');
// transactions
e('<div class="clear span-8">');
e($form->input('transactionsdone', array(
	'type' => 'text',
	'label' => 'Antal gennemførte selvbetjeningstransaktioner',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'transactionsdone')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'transactionsdone')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Telefon</legend>');
e('<p>Angiv hvor mange telefoniske henvendelser I har registreret i kommunen.</p>');
// callin
e('<div class="span-8 append-bottom">');
e($form->input('callin', array(
	'type' => 'text',
	'label' => 'Samlet antal indgående kald',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'callin')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'callin')));
e('</div>');
// callout
e('<div class="clear span-8 append-bottom">');
e($form->input('callout', array(
	'type' => 'text',
	'label' => 'Samlet antal udgående kald',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'callout')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'callout')));
e('</div>');
// citizenservice
e('<div class="clear span-8 append-bottom">');
e($form->input('callcitizenservice', array(
	'type' => 'text',
	'label' => 'Samlet antal indgående kald til Borgerservice',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'callcitizenservice')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'callcitizenservice')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Email</legend>');
e('<p>Angiv hvor mange email beskeder I har registreret i din kommune.</p>');
// emailin
e('<div class="span-8 append-bottom">');
e($form->input('emailin', array(
	'type' => 'text',
	'label' => 'Antal modtagede emails',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'emailin')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'emailin')));
e('</div>');
// emailout
e('<div class="clear span-8">');
e($form->input('emailout', array(
	'type' => 'text',
	'label' => 'Antal sendte emails',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'emailout')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'emailout')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Fysisk fremmøde</legend>');
e('<p>Angiv hvor mange personlige henvendelser I har registreret i kommunen.</p>');
// requests
e('<div class="span-8 append-bottom">');
e($form->input('requests', array(
	'type' => 'text',
	'label' => 'Personlige henvendelser (inklusiv borgerservice)',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'requests')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'requests')));
e('</div>');
// requestscitizenservice
e('<div class="clear span-8">');
e($form->input('requestscitizenservice', array(
	'type' => 'text',
	'label' => 'Personlige henvendelser i borgerservice',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'requestscitizenservice')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'requestscitizenservice')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>SMS</legend>');
e('<p>Angiv hvor mange SMSer I har registreret i kommunen.</p>');
e('<div class="span-8">');
e($form->input('sms', array(
	'type' => 'text',
	'label' => 'Antal modtagede SMS beskeder',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'sms')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'sms')));
e('</div>');
e('</fieldset>');

e('<fieldset>');
e('<legend>Breve</legend>');
e('<p>Angiv hvor mange breve I har registreret i kommunen.</p>');
// lettersin
e('<div class="span-8 append-bottom">');
e($form->input('lettersin', array(
	'type' => 'text',
	'label' => 'Antal modtagede breve',
	'legend' => false
)));
e('</div>');
e('<div class="span-11 append-bottom">');
e($this->element('period', array('id' => 'lettersin')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'lettersin')));
e('</div>');
// lettersout
e('<div class="clear span-8">');
e($form->input('lettersout', array(
	'type' => 'text',
	'label' => 'Antal sendte breve',
	'legend' => false
)));
e('</div>');
e('<div class="span-11">');
e($this->element('period', array('id' => 'lettersout')));
e('</div>');
// year
e('<div class="span-4 last">');
e($this->element('yearfield', array('id' => 'lettersout')));
e('</div>');
e('</fieldset>');

e($form->end('Send'));

$javascript->codeBlock('jQuery(document).ready(function(){ period(); });', array('inline' => false));

?>