<?php

namespace Sunder\Validator\Contracts;

interface Rule
{
    public function validate(mixed $data): bool;
}