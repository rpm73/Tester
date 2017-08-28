<?php
	$logfile = fopen("get_filesLog.txt","w");
	$dir = "datafiles/" . $_GET["lang"];
	fwrite($logfile,"Directory is " . $dir . "\n");
	$files1 = scandir($dir);
	echo json_encode($files1);
	fclose($logfile);
?>
