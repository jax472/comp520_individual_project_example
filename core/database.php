<?php
/**
 * This script will be used to connect to the database. If the connection
 * is not successful, the script will die (https://www.php.net/manual/en/function.die.php)
 * 
 * Note: as this script requires constants for the $db_server, $db_user, and $db_password,
 * the /core/constants.php must be included prior to this script. 
 * 
 * We will use MySQL Improved Extension (MySQLi)
 * source: https://www.php.net/manual/en/book.mysqli.php
 * database connection: https://www.php.net/manual/en/mysqli.quickstart.connections.php
 * additional source: https://www.w3schools.com/php/php_mysql_connect.asp
 * 
 */

// Create connection
$db_conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($db_conn->connect_error) {
  die("Database connection failed: " . $db_conn->connect_error);
}
?>