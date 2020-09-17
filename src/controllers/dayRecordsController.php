<?php

	session_start();
	requireValidSession();

	$date = (new Datetime())->getTimestamp();
	$today = strftime('%d de %B de %Y', $date);
	
	loadTemplateView('dayRecordsView', array('today' => $today));

?>