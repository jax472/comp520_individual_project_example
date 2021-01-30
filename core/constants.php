<?php
/**
 * This script will be used to define constants for our application
 * In computer programming, a constant is a value that cannot be 
 * altered by the program during normal execution, i.e., the value is constant. 
 * 
 * Note: for these constants in work in all scripts, this file MUST be loaded first.
 * Otherwise how can the constants be used if the script that defined them was not included
 * prior to referencing them???
 * 
 * https://www.php.net/manual/en/function.define.php
 */

 // BASE_URL will be the "domain name" or the url we type into the browser to access our project
 // directory. You should replace 'flashcards' below with the name of your projects folder as it is
 // named in the xampp htdocs directory
 define("BASE_URL", 'http://localhost/flashcards');

// DB_HOST will be set to the name of your host. 
// The host would be the url/IP address where our database lives at (is hosted at)
// in our case, our MySQL database is installed and hosted on our local machine
// so we set it the 'localhost'
define('DB_HOST', 'localhost');

// DB_NAME will be set the name of the database your application will use. This is the name
// that is in the 'CREATE DATABASE' MySQL command
define('DB_NAME', 'flashcards');

// DB_USER will be the username that will be used to access MySQL. We will just use 'root' user for simplicity
// however you can use any valid MySQL user that has been granted privileges on your database
// Creating MySQL Users: https://dev.mysql.com/doc/refman/8.0/en/create-user.html
// Granting Privileges: https://dev.mysql.com/doc/refman/8.0/en/grant.html
define('DB_USER', 'root');

// DB_PASS will be set the password of the DB_USER above
// For simplicity I will leave this blank, as my 'root' user has no password set (this is obviously bad in production)
define('DB_PASS','');


?>