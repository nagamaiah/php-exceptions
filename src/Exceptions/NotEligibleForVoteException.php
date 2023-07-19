<?php

namespace App\Exceptions;

use Exception;

class NotEligibleForVoteException extends Exception
{
    protected $message = "Voter is not eligible for Voting";
}