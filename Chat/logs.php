<?php 
require("../common.php"); 

$con = mysql_connect('sql2.freemysqlhosting.net', 'sql2107364','dZ2*wT7%');
mysql_select_db('sql2107364', $con);
$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");

while($extract = mysql_fetch_array($result1)){
 echo "<span class='uname'>". $extract['username']. "</span>:<span class='msg'>" . $extract['msg']. "</span><br>";
 

}
?>