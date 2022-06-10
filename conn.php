<?php
define('db_password' ,'');
define('db_password','');
define('db_host', 'localhost');
define('db_name', 'registration');

$conn = mysqli_connect (db_host, db_user, db_password, db_name);

if (mysql_connect_errno())
{
    echo "Failed to connect to MySQL:" .mysqli_connect_connect();
}
?>