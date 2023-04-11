<?php

namespace Sunder\Validator\Rules;

use Sunder\Validator\Contracts\Rule;

class IntRule implements Rule
{

    public function validate(mixed $data): bool
    {
        return is_int($data);
    }
}