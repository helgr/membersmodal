<?php 

require_once "config.php";

$connetction = mysql_connect(
	$config[db][host],
	$config[db][login],
	$config[db][pwd],
	$config[db][dbname],
	);

if ( $connection == false ) {
	echo 'No connect';
	echo mysql_connect_error();
	exit();
}

?>