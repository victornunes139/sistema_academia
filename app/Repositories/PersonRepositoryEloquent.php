<?php

namespace App\Repositories;

use App\Contracts\Repositories\PersonRepository;
use App\Entities\Person;

class PersonRepositoryEloquent implements PersonRepository
{
    public function teste(string $teste): ?string
    {
        return "doze";
    }
}