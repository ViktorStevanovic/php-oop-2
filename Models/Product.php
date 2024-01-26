<?php

/**
 * Generates a single product to be used in our ecommerce.
 */
class Product
{
    public $name;
    public $price;
    public $category;
    public $imageUrl;
    /**
     * Constructs a new product
     *
     * @param string $_name The product's name
     * @param string $_description A brief description of the product
     * @param float $_price The current price of the product
     * @param Category $_category The main category of this product
     */
    public function __construct(string $_name, float $_price, Category $_category, string $_imageUrl)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->category = $_category;
        $this->imageUrl = $_imageUrl;
    }
}
