<?php

// In this example I am adding the src/ and vendor/ directories to my include
// path so that the default autoloader will look in both folders for my classes
// I am also showing how the default autoloader will look for subdirectories
// that match the classes' namespace
set_include_path(get_include_path()
    . PATH_SEPARATOR . __DIR__ . '/src'
    . PATH_SEPARATOR . __DIR__ . '/vendor');
spl_autoload_register();

$user = new User;
$role = new TheWeekendProgrammer\Role;
