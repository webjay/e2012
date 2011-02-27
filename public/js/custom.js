
google.load('jquery', '1');

var UrlVars = getUrlVars();
var areaId = UrlVars['Area'] ? parseInt(UrlVars['Area']) : 0;

function load (str) {
	google.setOnLoadCallback(function(){
		jQuery(document).ready(function(){ 
			jQuery.globalEval(str);
		});
	});
}

function getUrlVars () {
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for (var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars;
}

function areacomplete () {
	jQuery('.areacomplete').focus(function(){
		jQuery(this).autocomplete({
			serviceUrl: '/areas/autocomplete.json'
		});
	});	
}

var area = {
	areaSearchWatch: function () {
		jQuery('#areaSearch').submit(function(){
			var p = {
				q: jQuery('#areaSearch input').val()
			}
			jQuery.get('/areas/search', p, function (data) {
				if (data == '') {
					jQuery('#areas').html('<b><i>Beklager, ingen resultater.</i></b>');
				} else {
					jQuery('#areas').html(data);
				}
			});
			return false;
		});	
	}
}

var volume = {
	txtCurrent: 'kommunen generelt',
	periodWatch: function () {
		if (jQuery('input.period:checked')) {
			return;
		}
		jQuery('input.period').one('change', function(){
			jQuery('input.period[value=' + jQuery('input.period:checked:first').val() + ']').attr('checked', 'checked');
			jQuery('input.period').unbind('change');
		});	
	},
	areaWatch: function () {
		jQuery('input[name="data[Target][area_id]"]').change(function (data) {
			var txtNew = jQuery('label[for=' + jQuery('input[name="data[Target][area_id]"]:checked').attr('id') + ']').text();
			txtNew = txtNew.toLowerCase();
			jQuery('p.desc').each(function (key, htmlStr) {
				var txtThis = jQuery(htmlStr).text();
				var txtReplace = txtThis.replace(volume.txtCurrent, txtNew);
				jQuery(htmlStr).text(txtReplace);
			})
			volume.txtCurrent = txtNew;
			// get previous data
			var area_id = jQuery('input[name="data[Target][area_id]"]:checked').attr('value');
			jQuery.getJSON('/data/targetdata/' + area_id + '.json?callback=?', function (data) {
				if (data == false) {
					jQuery('input[type="text"]').attr('value', '');
				}
				jQuery.each(data.Target, function (index, value) { 
					var cakeid = 'Target' + ucfirst(index);
					if (jQuery('#' + cakeid)) {
						jQuery('#' + cakeid).attr('value', value);
					}
					if (index.indexOf('-period') >= 0) {
						jQuery('#' + cakeid + value).attr('checked', 'checked');
					}
					if (index.indexOf('-year') >= 0) {
						jQuery('#' + cakeid + 'Year option:selected').removeAttr('selected');
						jQuery('#' + cakeid + 'Year').val(value);
					}
				});
			});
		});	
	}
}

var map3 = {
	mobj: null,
	dkml: null,
	minZoom: 5,
	group_id: 0,
	visual_id: 0,
	kmlUrl: '',
	init: function () {
		var mapCenter = new google.maps.LatLng(56.1581354, 10.2120017); /* 'Aarhus, Denmark' = (56.1581354, 10.2120017) */
		var options = {
			center: mapCenter,
			zoom: 8,
			scrollwheel: false,
			streetViewControl: false,
			mapTypeId: google.maps.MapTypeId.TERRAIN,
			mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
		}
		// show map
		map3.mobj = new google.maps.Map(document.getElementById('map'), options);
		// draw municipality borders and style
		// visual_id from url parm takes precedence over default set at /bpn
		if (UrlVars['visual_id']) {
			map3.visual_id = parseInt(UrlVars['visual_id']);
		}
		if (map3.visual_id > 0) {
			map3.visual();
		} else {
			map3.setMap(areaId);
		}
		// set min zoom
		google.maps.event.addListener(map3.mobj, 'zoom_changed', function(){ 
			if (map3.mobj.getZoom() < map3.minZoom) { 
				map3.mobj.setZoom(map3.minZoom);
			}; 
		});
		// detect select changes
		map3.areaDetect();
		map3.visualDetect();
	},
	setMap: function (areaId) {
		var options = {
			preserveViewport: true,
			map: map3.mobj
		}
		if (map3.dkml) {
			map3.dkml.setMap(null);
		}
		var url = 'http://digitaltlandkort.dk/dkml/kml/' + areaId + '.kml';
		map3.dkml = new google.maps.KmlLayer(url, options);
	},
	areaDetect: function () {
		jQuery('#VisualArea').val(areaId);
		jQuery('#VisualArea').change(function(){
			map3.setMap(jQuery(this).val());
			jQuery('#overlay').fadeOut('slow');
			jQuery('#Visuals').val('');
		});	
	},
	visualDetect: function () {
		jQuery('#Visuals').change(function(){
			map3.group_id = jQuery(this).find('option:selected').parent().attr('data-groupid');
			map3.visual_id = jQuery(this).val();
			jQuery('#overlay').fadeOut('slow');
			if (map3.dkml) {
				map3.dkml.setMap(null);
			}
			map3.visual();
		});	
	},
	visual: function () {
		// reset
		jQuery('#VisualArea').val('');
		// set default url
		map3.kmlUrl = 'http://digitaltlandkort.dk/dkml/visual/' + map3.visual_id + '.kml';
		//map3.kmlUrl = map3.kmlUrl + '?nocache=' + ( new Date() ).valueOf();
		// show overlay
		jQuery('#Visuals option[value=' + map3.visual_id + ']').attr('selected', 'selected'); 
		jQuery.getJSON('/data/criteria/' + map3.visual_id + '.json', function (data) {
			jQuery('#overlay').empty();
			if (data[0].Visual.url != '') {
				map3.kmlUrl = data[0].Visual.url;
			}
			jQuery('#overlay').append('<p><b>' + data[0].Visual.name + '</b></p>');
			jQuery('#overlay').append('<table>');
			jQuery.each(data[0].Criteria, function (index, value) {
				jQuery('#overlay table').append('<tr>');
				if (data[0].Visual.interval == 1) {
					if (value.criteria == 0) {
						var th = '<th>0</th>';
					} else if (data[0].Criteria[index + 1]) {
						var start = value.criteria;
						var stop = data[0].Criteria[index + 1].criteria - 1;
						var th = '<th>' + start + ' - ' + stop + '</th>';
					} else {
						var start = value.criteria;
						var stop = parseInt(value.criteria) + parseInt(value.criteria - data[0].Criteria[index - 1].criteria);
						var th = '<th>' + start + ' - ' + stop + '</th>';
					}
				} else {
					var th = '<th>' + value.criteria + ' ' + pluralize(data[0].Visual.term, value.criteria) + '</th>';
				}
				jQuery('#overlay tr').last().append(th);
				jQuery('#overlay tr').last().append('<td style="background-color:#' + value.color + ';"></td>');
			});
			jQuery('#overlay').fadeIn('slow');
			// choose map
			var options = {
				preserveViewport: true,
				map: map3.mobj
			}
			map3.dkml = new google.maps.KmlLayer(map3.kmlUrl, options);
		});
	}
}

function ucfirst (str) {
	str += '';
	var f = str.charAt(0).toUpperCase();
	return f + str.substr(1);
}

function pluralize (txt, count, plural) {
	if (plural == null) {
		plural = txt + 'r';
	}
	return (count == 1 ? txt : plural)
}
