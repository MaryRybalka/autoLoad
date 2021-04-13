<?php


namespace manufacture;


class gtr extends nissan
{
    private $model;

    public function __construct()
    {
        $this->model = "gt-r";
    }

    public function drive(): string
    {
        return "I'm godzilla!\n";
    }
}