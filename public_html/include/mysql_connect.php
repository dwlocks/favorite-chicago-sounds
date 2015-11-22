<?php	# utils for working w/ mysql db:

DEFINE('DB_USER', 'favorite_web');
DEFINE('DB_PASSWORD', 'pass');
DEFINE('DB_HOST', 'favoritechicagosounds.ipowermysql.com');
DEFINE('DB_NAME', 'favorite_sounds');

$db = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) OR die('Could not connect to the mysql database: ' . mysql_error());

@mysql_select_db(DB_NAME) OR die('Could not select the mysql database: ' . mysql_error());

?>