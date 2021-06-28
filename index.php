<?php

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); */

# classi generali ( PRODOTTI / CLIENTI )

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

}
class Car extends Product
{

}
class Smartphone extends Product
{

}
class User
{
    public $name;
    public $username;
    protected $mail;
    protected $password;
}

$contoller = new Product('Elite', 'Xbox', 99.99, 'lorem controller');
var_dump($contoller);