<?php

namespace byers;


class customer
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHi(): string
    {
        return "Hi, i'm $this->name\n";
    }
}