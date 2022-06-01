<?php

declare(strict_types = 1);
namespace App\Domain\Entities;
use App\Domain\ValueObjects\Email;
use App\Domain\ValueObjects\CPF;

final class Registration 
{
    private string $name;
    private Email $email;
    private CPF $document;
    private \DateTimeInterface $birthDate;
    private \DateTimeInterface $registrationAt;

    /**
     * Get Name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return Registration
     */
    public function setName(string $name): Registration
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Email
     *
     * @return string
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * Set Email
     *
     * @param Email $email
     * @return Registration
     */
    public function setEmail(Email $email): Registration
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get Document
     *
     * @return string
     */
    public function getDocument(): CPF
    {
        return $this->document;
    }

    /**
     * Set Document
     *
     * @param CPF $document
     * @return Registration
     */
    public function setDocument(CPF $document): Registration
    {
        $this->document = $document;
        return $this;
    }

    /**
     * Get BirthDate
     *
     * @return string
     */
    public function getBirthDate(): \DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * Set BirthDate
     *
     * @param string $birthDate
     * @return Registration
     */
    public function setBirthDate(\DateTimeInterface $birthDate): Registration
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Get RegistrationAt
     *
     * @return string
     */
    public function getRegistrationAt(): \DateTimeInterface
    {
        return $this->registrationAt;
    }

    /**
     * Set RegistrationAt
     *
     * @param string $registrationAt
     * @return Registration
     */
    public function setRegistrationAt(\DateTimeInterface $registrationAt): Registration
    {
        $this->registrationAt = $registrationAt;
        return $this;
    }
    
}