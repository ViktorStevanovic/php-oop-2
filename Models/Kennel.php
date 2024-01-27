<?php
require_once __DIR__ . '/Product.php';

class Kennel extends Product
{
    public $type = 'Kennel';


    public function __construct(string $_name, float $_price, Category $_category, string $_imageUrl)
    {
        parent::__construct($_name, $_price, $_category, $_imageUrl);
    }
}
