<?php


# FileName="Connection_php_mysqli.htm"
# Type="mysqli"
# HTTP="true"
$hostname_login = "localhost";
$database_login = "lagoon_db";
$username_login = "root";
$password_login = "";
$login = mysqli_pconnect($hostname_login, $username_login, $password_login) or trigger_error(mysqli_error(),E_USER_ERROR); 


$data = mysqli_select_db($database_login);
if(!$data){
die("No database Selected");
}
?>