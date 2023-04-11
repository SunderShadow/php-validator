<?php
namespace Sunder\Validator\Contracts;

interface Validator
{
    public function __construct(array $rules);

    public function validate(array $data): ValidationResult;
}