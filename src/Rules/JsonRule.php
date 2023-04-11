<?php

namespace Sunder\Validator\Rules;

use Sunder\Validator\Contracts\Rule;

/**
 * Valid JSON rule
 */
class JsonRule implements Rule
{
    public function __construct(
        private int $depth = 512
    )
    {}

    public function validate(mixed $data): bool
    {
        try {
            json_decode($data, true, $this->depth,JSON_THROW_ON_ERROR);
            return true;
        } catch (\JsonException) {
            return false;
        }
    }
}