<?php

include_once __DIR__ . '/prodotti.php';

class Accessory extends Prodotti{
    public $material;
    public $size;
    
    
    public function __construct(
        String $name, 
        Float $price,
        String $image,
        Bool $is_available, 
        Category $category,

        String $material,
        String $size
    ) {
        parent::__construct($name,$price,$image,$is_available,$category);
        $this->material = $material;
        $this->size = $size;
    }
    
}



?>
