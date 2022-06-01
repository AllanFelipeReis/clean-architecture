<?php
declare(strict_types = 1);
namespace App\Domain\ValueObjects;

final class CPF 
{
    private string $document;

    /**
     * Construção do tipo document e validação
     *
     * @param string $document
     */
    public function __construct(string $document)
    {
        if(!$this->validate($document)) {
            throw new \DomainException("Document is not valid");
        }

        $this->document = $document;
    }

    /**
     * Valida o CPF
     *
     * @param string $document
     * @return boolean
     */
    public function validate(string $document): bool
    {
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $document );
        
        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    /**
     * Retorna o valor
     *
     * @return string
     */
    public function value(): string
    {
        return $this->document;
    }

    /**
     * Retorna o valor
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->document;
    }
}