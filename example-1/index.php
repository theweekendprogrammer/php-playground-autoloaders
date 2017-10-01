<?php

// This will automatically load any classes in my include_path, which by default
// will be . (current directory)
//
// TODO: Comment this out and you will see an error "Class 'User' not found".
spl_autoload_register();

$user = new User;
