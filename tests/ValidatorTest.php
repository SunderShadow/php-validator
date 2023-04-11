<?php

class ValidatorTest extends \PHPUnit\Framework\TestCase
{
    public function test_simple_validation()
    {
        $validator = new \Sunder\Validator\Validator([
            'asd' => new \Rules\StringRule
        ]);
        $validationResult = $validator->validate([
            'asd' => 'asd'
        ]);
        $this->assertTrue($validationResult->isValid);
    }
}