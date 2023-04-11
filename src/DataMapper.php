<?php

namespace Sunder\Validator;

class DataMapper
{
    const KEY_SEPARATOR = '.';

    public function __construct(private array $data)
    {
    }

    public function map(string $key)
    {
        $data = $this->data;
        foreach (explode(self::KEY_SEPARATOR, $key) as $keyPart) {
            if (!isset($data[$keyPart])) {
                return null;
            }
            $data = $data[$keyPart];
        }

        return $data;
    }
}