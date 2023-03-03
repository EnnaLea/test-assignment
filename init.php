<?php

//function to autoload classes
spl_autoload_register(function ($classname) {
    include "classes/" . $classname . ".class.php";
});


// database details
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASS', 'root');
// define('DB_NAME', 'products');
// define('DB_PORT', '8889');
