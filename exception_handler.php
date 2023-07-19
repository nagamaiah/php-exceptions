<?php

$result  = 10/0;


function customException($e)
{
    echo $e::class;
}







set_exception_handler('customException');