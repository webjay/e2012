<?php

	$str = 'For at ændre din adgangskode på digitaltlandkort.dk skal du trykke på nedenstående link og følge instruktionerne:';
	$str = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	e($str);
	
	e("\r\n\r\n");
	
	e($link);

?>