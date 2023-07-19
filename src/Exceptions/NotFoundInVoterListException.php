<?php

namespace App\Exceptions;

use Exception;

class NotFoundInVoterListException extends Exception
{
    protected $message = "Voter not found in Voter List";
    
}