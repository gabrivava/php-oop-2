<?php

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); */

# classi generali ( PRODOTTI / CLIENTI )

// Prodotti
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
    public function __construct($nome, $desc, $prezzo, $quant, $size, $color) {

        parent:: __construct($nome, $desc, $prezzo, $quant);
        $this->size = $size;
        $this->color = $color;

    }
}
class Car extends Product
{
    public function __construct($nome, $desc, $prezzo, $quant, $engine, $fuel) {

        parent:: __construct($nome, $desc, $prezzo, $quant);
        $this->engine = $engine;
        $this->fuel = $fuel;

    }
}
class Smartphone extends Product
{
    public function __construct($nome, $desc, $prezzo, $quant, $memory, $facescan) {

        parent:: __construct($nome, $desc, $prezzo, $quant);
        $this->memory = $memory;
        $this->facescan = $facescan;

    }
}

// Utenti
class User
{
    public $name;
    public $username;
    protected $mail;
    protected $password;

    public function __construct(string $name,string $username,string $mail,string $password) {
        $this->name = $name;
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
    }
}
class UserPremium extends User 
{
    public function __construct($name, $username, $mail, $password, $scontoPremium, $puntiPremium) {

        parent:: __construct($name, $username, $mail, $password);
        $this->scontoPremium = $scontoPremium;
        $this->puntiPremium = $puntiPremium;
    }
}


$contoller = new Product('Elite', 'Xbox', 99.99, 'lorem controller');
var_dump($contoller);

$io = new User('Gabriele', 'Vava98', 'mail.mail@gmial.com', '123457AB');
var_dump($io);