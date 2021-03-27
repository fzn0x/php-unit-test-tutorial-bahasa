<?php

namespace FauzanUnitTest;

class MaxValue
{
    private $array;

    private function __construct($array)
    {
        $this->isArray($array);
        $this->array = $array;
    }

    public static function fromArray($array): self
    {
        return new self($array);
    }

    public function getMaxValue(): int
    {
        return max($this->array);
    }

    private function isArray($array): void
    {
        if(!is_array($array))
            throw new \InvalidArgumentException("The value given is not an array!");
    }
}