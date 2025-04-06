<?php
require_once 'global.php';
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$port);
if(!$link){ die('Your Database Connection is not successful. Please check!<br> '.mysqli_connect_error()); }
?>
