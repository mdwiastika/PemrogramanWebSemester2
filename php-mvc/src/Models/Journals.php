<?php

namespace App\Models;

class Journals
{
    public $name;
    public $publisher_year;
    public function __construct($name, $publisher_year)
    {
        $this->name = $name;
        $this->publisher_year = $publisher_year;
    }
}
