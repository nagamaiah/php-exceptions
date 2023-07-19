<?php

namespace App\Controllers;

use App\Exceptions\{NotEligibleForVoteException, NotFoundInVoterListException};

class VotesController
{
    public array $voterListNames = [
        'gam', 'ram', 'sam', 'jam', 'bam', 'tum', 'kom'
    ];

    public function __construct(
        protected ?string $name = null, 
        protected ?int $age = null
    )
    {

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getVoterListNames()
    {
        return $this->voterListNames;
    }

    public function checkVoterExistsInList()
    {
        if(!in_array($this->name, $this->voterListNames))
        {
            throw new NotFoundInVoterListException();
        } else {
            echo "<p>Voter exists in list</p>";
        }

    }

    public function checkVoterAgeEligibility()
    {
        if($this->age <= 17)
        {
            throw new NotEligibleForVoteException();
        } else {
            echo "<p>Voter is eligible for voting</p>";
        }
    }
    
}