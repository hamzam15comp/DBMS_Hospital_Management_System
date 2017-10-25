<?php
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass)or die(errorReport(mysql_error()));
mysqli_select_db($link, $db)or die(errorReport(mysql_error()));
mysqli_query($link, "delete from Session");
header('Location: index.php');
?>
