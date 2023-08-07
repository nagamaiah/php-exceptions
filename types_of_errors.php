<?php
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
error_reporting(E_ALL);

$user = "sirluuu";

function sum($a, $b, $c)
{
    return $a+$b+$c;
}

// 1. syntax error - missing '}[";: (or) spelling mistakes
// echo "user is {$user}";


// 2. fatal error - func, class or constant not found
// echo div();  Fatal error: Uncaught Error: Call to undefined function div()
// echo TARRR;  Fatal error: Uncaught Error: Undefined constant "TARRR"
// $user = new User();  Fatal error: Uncaught Error: Class "User" not found



// 3. warning error
// include "test.txt";  // Warning: include(test.txt): Failed to open stream: No such file or directory
// echo $something;

// 4. notice error




