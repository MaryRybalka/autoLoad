<?php


namespace manufacture;


class toyota implements car
{
    private $manufacture;

    public function __construct()
    {
        $this->manufacture = "toyota";
    }

    public function drive(): string
    {
        return "I'm speed\n";
    }

    public function getManufacture(): string
    {
        return "I'm $this->manufacture\n";
    }
}