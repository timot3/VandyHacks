<?php
	$inputVal = $_GET["myCountry"];
	//echo $inputVal;
	//$command = escapeshellcmd('/usr/bin/python3 /var/www/html/test.py ' . $inputVal);
	//$output = shell_exec($command);
	echo $output;
	//file_put_contents('/var/www/html/files/output.jpg', $output);
	header('Location: results.html?success=true');
?>
