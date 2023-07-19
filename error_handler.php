<?php

function customErrorHandler($error_number, $error_message, $file, $line)
{
    // $today = date('d-m-Y_h:i:s_A');
    $date = new \DateTime();
    $today = $date->format('d-M-Y_h:i_A');
    $params = compact('error_number', 'error_message', 'file', 'line', 'today');
    
    $dir = 'logs';
    if (!is_dir($dir)) {
        mkdir($dir, 777, true);
        chmod($dir, 0777);
    }
    
    $error_string = $params['today']." :: ".$params['error_message']." in ".$params['file']." at line ".$params['line']."\n";
    file_put_contents('logs/'.$today.'.log', $error_string, FILE_APPEND);
}

set_error_handler('customErrorHandler');

echo $dfgk;



// register_shutdown_function()
// Checks for a fatal error, work around for set_error_handler not working on fatal errors.