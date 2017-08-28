<?php 
	$fpath = "datafiles/" . $_GET["lang"] . "/" . $_GET["fname"];
	mb_internal_encoding("utf-8");
	$line = file_get_contents($fpath);
	echo json_encode($line, JSON_UNESCAPED_UNICODE);
?>
