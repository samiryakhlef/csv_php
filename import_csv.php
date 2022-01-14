<?php
$fh = fopen($_FILES['file']['tmp_name'], 'r');

$lines = array();
while( ($row = fgetcsv($fh, 2500)) !== FALSE ) {
	$lines[] = $row;
}
var_dump($lines);
?>