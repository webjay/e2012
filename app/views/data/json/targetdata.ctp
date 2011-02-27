<?php

	if (isset($callback)) {
		e($callback.'('.json_encode($targetdata).');');
	} else {
		e(json_encode($targetdata));
	}

?>