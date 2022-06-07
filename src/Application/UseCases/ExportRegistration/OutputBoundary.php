<?php

declare(strict_types = 1);
namespace App\Application\UseCases\ExportRegistration;

final class OutputBoundary {
    private string $name;
    private string $email;
    private string $birthDate;
    private string $document;
    private string $registrationAt;

    public function __construct(array $values)
    {
        $this->name = $values['name'] ?? '';
        $this->email = $values['email'] ?? '';
        $this->birthDate = $values['birthDate'] ?? '';
        $this->document = $values['document'] ?? '';
        $this->registrationAt = $values['registrationAt'] ?? '';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @return string
     */
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * @return string
     */
    public function getRegistrationAt(): string
    {
        return $this->registrationAt;
    }
}