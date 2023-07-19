<?php

function shutdown()

{

    $a=error_get_last();

    if($a==null)   

        echo "No errors";

    else

         print_r($a);

    

}

register_shutdown_function('shutdown');

ini_set('max_execution_time',1 );

sleep(3);

?>