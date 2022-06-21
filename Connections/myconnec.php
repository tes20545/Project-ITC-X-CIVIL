<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myconnec = "localhost";
$database_myconnec = "files";
$username_myconnec = "root";
$password_myconnec = "y74243685";
$myconnec = mysql_pconnect($hostname_myconnec, $username_myconnec, $password_myconnec) or trigger_error(mysql_error(),E_USER_ERROR); 
?>