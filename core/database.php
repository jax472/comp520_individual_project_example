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
$db_conn = mysqli_connect(DB_HOST, DB_NAME, DB_PASS);

// Check connection
if (!$db_conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>