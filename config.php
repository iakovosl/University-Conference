<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','12345678');
define('DB_NAME','register');
// Establish database connection.

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    



?>