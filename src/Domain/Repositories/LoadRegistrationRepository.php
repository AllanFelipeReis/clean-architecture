<?php

declare(strict_types = 1); 

namespace App\Domain\Repositories;

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\CPF;

interface LoadRegistrationRepository {
    public function loadByRegistrationDocument(CPF $document): Registration;
}