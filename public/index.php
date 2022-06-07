<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\CPF;
use App\Domain\ValueObjects\Email;
use App\Application\UseCases\ExportRegistration;
use App\Application\UseCases\ExportRegistration\InputBoundary;

$registration = new Registration();
$registration->setName('Allan Reis')
    ->setBirthDate(new DateTimeImmutable('2000-06-30'))
    ->setEmail(new Email('allanreis3006@gmail.com'))
    ->setDocument(new CPF("406.479.558-06"))
    ->setRegistrationAt(new DateTimeImmutable( ));

// Caso de uso não finalizado pois falta implementar a interface
$exportRegistrationUseCase = new ExportRegistration();
$inputBoundary = new InputBoundary("0123456789");
$output = $exportRegistrationUseCase->handle($inputBoundary);