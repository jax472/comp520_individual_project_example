<?php

/**
 * This script will be used to "load" the PHP application. All that really means
 * is it will handle including all the required scripts, in the correct order, to make our application
 * functional. This way when we write our application views (views being the pages you will see in the browser)
 * we only have to include this script, as opposed to including all the other required scripts.
 */

// the only constants we will define outside of the core/constants.php file will be the
// APP_FOLDER_NAME and the APP_ROOT_DIR. 
// APP_FOLDER_NAME will be the name of the folder (directory) your project is stored in xampp/htdocs
// APP_ROOT_DIR will be the absolute path to the projects root level directory.
define("APP_FOLDER_NAME", "flashcards"); 
define("APP_ROOT_DIR", $_SERVER['DOCUMENT_ROOT'] . '/' . APP_FOLDER_NAME . '/');

// Loads constants first, as other scripts rely on the named constants defined in this script
require(APP_ROOT_DIR . 'core/constants.php');

// Loads the database script, which connects to the database
// Note: this script exposes the $db_conn variable to the rest of our app. We will use the $db_conn
// variable to interact with our database
require(APP_ROOT_DIR . 'core/database.php');

// Load the script containing all the functions we want defined globally
require(APP_ROOT_DIR . 'core/functions.php');

?>