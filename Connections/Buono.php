<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Buono = "localhost";
$database_Buono = "buono";
$username_Buono = "admin";
$password_Buono = "a123";
$Buono = mysql_pconnect($hostname_Buono, $username_Buono, $password_Buono) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("set names utf8");
?>