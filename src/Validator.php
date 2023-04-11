<?php

namespace Sunder\Validator;

use Sunder\Validator\Contracts\Rule;
use Sunder\Validator\Contracts\ValidationResult;
use Sunder\Validator\Contracts\Validator as ValidatorContract;

class Validator implements ValidatorContract
{
    /** @var Rule[] $rules */
    public function __construct(
        private readonly array $rules
    )
    {}

    public function validate(array $data): ValidationResult
    {
        $failedFields = [];
        foreach ($this->rules as $key => $rule) {
            if (!isset($data[$key]) || !$this->validateSingle($rule, $data[$key])) {
                $failedFields[] = $key;
            }
        }

        return new ValidationResult($failedFields);
    }

    /**
     * @param Rule[]|Rule $rules
     * @param mixed $data
     * @return bool
     */
    private function validateSingle(array|Rule $rules, mixed $data): bool
    {
        if (!is_array($rules)) {
            $rules = [$rules];
        }

        foreach ($rules as $rule) {
            if (!$rule->validate($data)) {
                return false;
            }
        }

        return true;
    }
}