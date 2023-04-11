<?php

namespace Sunder\Validator\Contracts;

readonly class ValidationResult
{
    public bool $isValid;

    public function __construct(
        public array $failedFields
    )
    {
        $this->isValid = !count($this->failedFields);
    }
}