<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $type = 'Toy';


    public function __construct(string $_name, float $_price, Category $_category,)
    {
        parent::__construct($_name, $_price, $_category);
    }
}
