<?php
declare(strict_types = 1);
namespace App\Domain\ValueObjects;

final class Email 
{
    private string $email;

    /**
     * Construção do tipo email e validação
     *
     * @param string $email
     */
    public function __construct(string $email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new \DomainException("Email is not valid");
        }

        $this->email = $email;
    }

    /**
     * Retorna o valor
     *
     * @return string
     */
    public function value(): string
    {
        return $this->email;
    }

    /**
     * Retorna o valor
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->email;
    }
}