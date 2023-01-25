<?php
include_once __DIR__ . '/prodotti.php';

class Food extends Prodotti{
    public $weight;
    public $ingredients;

    public function __construct(
        String $name, 
        Float $price,
        String $image, 
        Bool $is_available, 
        Category $category,

        String $weight,
        String $ingredients
    ) {
        parent::__construct($name,$price,$image,$is_available,$category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}

?>