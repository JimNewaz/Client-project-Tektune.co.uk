<?php
define('DB_SERVER','localhost');
define('DB_USER','gamesto1_len');
define('DB_PASS' ,'567@len567_');
define('DB_NAME', 'gamesto1_remaps');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$con->set_charset('utf8mb4');

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>