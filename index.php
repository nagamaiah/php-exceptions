<?php

require 'vendor/autoload.php';

use App\Controllers\VotesController;
use App\Exceptions\{NotEligibleForVoteException, NotFoundInVoterListException};


try {

    $votes = new VotesController('tum', 18);
    $votes->checkVoterExistsInList();
    $votes->checkVoterAgeEligibility();

} catch (NotFoundInVoterListException $e) {
    echo $e->getMessage();
} catch (NotEligibleForVoteException $e) {
    echo $e->getMessage();
} catch (\Throwable $th) {
    echo "Throwable block reached <br>";
    echo $th::class;
}



// try {
//     $result = 10/0;
// } catch (\Throwable $th) {
//     echo $th::class; // DivisionByZeroError
// }


// try {
//     // this will generate notice that would not be caught
//     // echo $someNotSetVariable;
//     // fatal error that now actually is caught
//     someNoneExistentFunction();
//  } catch (\Error $e) {
//     // echo $e::class;
//        echo $e->getMessage();
//  }


// try {
//     throw new \Exception("Got exception here....");
// } catch (\Throwable $th) {
//     $errors = json_encode([
//         "error" => $th->getMessage()
//     ]);
//     print_r($errors);
// }


// Error Handling Functions in PHP
// https://netgen.io/blog/modern-error-handling-in-php