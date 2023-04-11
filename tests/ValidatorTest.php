<?php

class ValidatorTest extends \PHPUnit\Framework\TestCase
{
    public function test_simple_validation()
    {
        $validator = new \Sunder\Validator\Validator([
            'asd' => new \Sunder\Validator\Rules\StringRule
        ]);
        $validationResult = $validator->validate([
            'asd' => 'asd'
        ]);
        $this->assertTrue($validationResult->isValid);
    }

    public function test_array_validation()
    {
        $validator = new \Sunder\Validator\Validator([
            'arr.first' => new \Sunder\Validator\Rules\StringRule,
            'arr.second' => new \Sunder\Validator\Rules\IntRule
        ]);

        $validationResult = $validator->validate([
            'arr' => [
                'first' => 'str',
                'second' => 123
            ]
        ]);
        $this->assertTrue($validationResult->isValid);
    }
}