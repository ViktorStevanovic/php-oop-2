<?php

class Category
{
    public $animal;
    public $icon;

    /**
     * Constructs a new instance of type Category, given an animal, a description and an icon relevant to the category.
     *
     * @param string $_name Category's animal
     * @param string $_description Category's description
     * @param string|null $_imageUrl Category's icon.
     */
    public function __construct(string $_animal, string $_icon)
    {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }
}
