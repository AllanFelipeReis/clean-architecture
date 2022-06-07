<?php

declare(strict_types = 1);
namespace App\Application\UseCases\ExportRegistration;

use App\Domain\ValueObjects\CPF;
use App\Domain\Repositories\LoadRegistrationRepository;
use DateTime;

final class ExportRegistration {

    private LoadRegistrationRepository $repository;

    public function __construct(LoadRegistrationRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Handle Export Registration
     *
     * @param InputBoundary $input
     * @return OutputBoundary
     */
    public function handle(InputBoundary $input): OutputBoundary
    {
        $document = new CPF($input->getDocument());
        $registration = $this->repository->loadByRegistrationDocument($document);

        return new OutputBoundary([
            "name" => $registration->getName(),
            "email" => (string) $registration->getEmail(),
            "document" => (string) $registration->getDocument(),
            "birthDate" => $registration->getBirthDate()->format(DateTime::ATOM),
            "registrationAt" => $registration->getRegistrationAt()->format(DateTime::ATOM),
        ]);
    }
}