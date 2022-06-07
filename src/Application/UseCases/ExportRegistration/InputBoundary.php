<?php

declare(strict_types = 1);
namespace App\Application\UseCases\ExportRegistration;

final class InputBoundary {
    private string $document;

    /**
     * Constructor Input Boundary
     *
     * @param string $document
     */
    public function __construct(string $document)
    {
        $this->document = $document;
    }

    /**
     *
     * @return string
     */
    public function getDocument(): string
    {
        return $this->document;
    }
}