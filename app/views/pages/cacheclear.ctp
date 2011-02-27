<?php

	// clear cache on every deploy, called from springloops.com via POST
	Cache::clear();
	clearCache();
	$this->log('Cache cleared', LOG_DEBUG); 

?>