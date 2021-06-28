<?php

class Product
{
    public $name;
    public $marca;
    public $price;
    public $description;

    # contructor prodotti
    public function __construct(string $_name, string $_marca, int $_price, string $_description) {
        $this->name = $_name;
        $this->marca = $_marca;
        $this->price = $_price;
        $this->description = $_description;
    }
}

# extend a categorie minori
class Cloth extends Product 
{
    public function __construct($nome, $marca, $prezzo, $desc, $size, $color) {

        parent:: __construct($nome, $marca, $prezzo, $desc);
        $this->size = $size;
        $this->color = $color;

    }
}
class Car extends Product
{
    public function __construct($nome, $marca, $prezzo, $desc, $engine, $fuel) {

        parent:: __construct($nome, $marca, $prezzo, $desc);
        $this->engine = $engine;
        $this->fuel = $fuel;

    }
}
class Smartphone extends Product
{
    public function __construct($nome, $marca, $prezzo, $desc, $memory, $facescan) {

        parent:: __construct($nome, $marca, $prezzo, $desc);
        $this->memory = $memory;
        $this->facescan = $facescan;

    }
}
