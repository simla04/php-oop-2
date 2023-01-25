<?php

include_once __DIR__ . '/prodotti.php';

class Toy extends Prodotti{
    public $features;
    public $size;

    public function __construct(
        String $name, 
        Float $price,
        String $image,
        Bool $is_available,
        Category $category,

        String $features,
        String $size
    ) {
        parent::__construct($name,$price,$image,$is_available,$category);
        $this->features = $features;
        $this->size = $size;
    }
}
?>