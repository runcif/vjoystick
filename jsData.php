<?php 
$myfile = fopen("test.txt", "w") or die("Unable to open file!"); 
$txt = "x = " . $_GET['x'] . " y = ".$_GET['y']; 
echo $txt;
fwrite($myfile, $txt); 
fclose($myfile);
?> 
