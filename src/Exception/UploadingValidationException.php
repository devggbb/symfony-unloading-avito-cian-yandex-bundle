<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Exception;

use Symfony\Component\Validator\ConstraintViolationListInterface;

class UploadingValidationException extends \Exception
{
    public function __construct(private readonly ConstraintViolationListInterface $errors)
    {
        parent::__construct('Validation errors', 400);
    }

    public function getErrors(): ConstraintViolationListInterface
    {
        return $this->errors;
    }
}