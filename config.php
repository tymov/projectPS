<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '1234';
$DB_NAME = 'users';

/* Attempt to connect to MySQL database */
$mysqlconnect = mysqli_connect("$DB_SERVER", "$DB_USERNAME", "$DB_PASSWORD", "$DB_NAME");

// Check connection
if ($mysqlconnect === false) {
    die('ERROR: Could not connect. ');
}
