<?php
	$dir = "datafiles";
	$files1 = scandir($dir);
	echo json_encode($files1);
?>
