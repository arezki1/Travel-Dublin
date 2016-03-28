<?php
define('DB_SERVER', 'sql2.freemysqlhosting.net');
define('DB_USERNAME', 'sql2107364');
define('DB_PASSWORD', 'dZ2*wT7%');
define('DB_DATABASE', 'sql2107364');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

?>
