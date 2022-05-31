<?php

namespace App\Libraries\Panel;

class Menu
{
    protected $dataset;

    public function __construct(array $dataset)
    {
        $this->dataset = $dataset;
    }

    public function encode()
    {
        return $this->dataset;
    }
}