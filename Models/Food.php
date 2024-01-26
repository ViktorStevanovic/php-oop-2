<?php
require_once __DIR__ . '/Product.php';

class Computer extends Product
{
    public $type;


    public function __construct(string $_name, float $_price, Category $_category, $_type)
    {
        parent::__construct($_name, $_price, $_category);
        $this->type = $_type;
    }
}
