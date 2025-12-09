<?php

try {
	// do something
} catch (Exception $e) {
	// code to handle exception
} finally {
	// code to clean up the resource
}


$data = [];

try {
	$f = fopen('data.csv', 'r');

	while ($row = $fgetcsv($f)) {
		$data[] = $row;
	}
} catch (Exception $ex) {
	echo $ex->getMessage();
} finally {
	if ($f) {
		fclose($f);
	}
}
