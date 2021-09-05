<?php
define('DB_SERVER','148.66.146.8');
define('DB_USER','highjobalert');
define('DB_PASS' ,'highjobalert');
define('DB_NAME','highjobalert');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>