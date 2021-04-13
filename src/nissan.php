<?php


namespace manufacture;


class nissan implements car
{
    private $manufacture;

    public function __construct()
    {
        $this->manufacture = "nissan";
    }

    public function drive(): string
    {
        return "I'm speed too\n";
    }

    public function getManufacture(): string
    {
        return "I'm $this->manufacture\n";
    }

}