<?php

namespace Sunder\Validator\Rules;

use Sunder\Validator\Contracts\Rule;

class StringRule implements Rule
{
    public function validate(mixed $data): bool
    {
        return is_string($data);
    }
}