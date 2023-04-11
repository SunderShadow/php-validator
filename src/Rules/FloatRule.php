<?php

namespace Sunder\Validator\Rules;

use Sunder\Validator\Contracts\Rule;

class FloatRule implements Rule
{
    public function validate(mixed $data): bool
    {
        return is_float($data);
    }
}