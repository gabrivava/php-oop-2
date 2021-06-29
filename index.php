<?php

/* Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..); 
$user->insertCreditCard($c); */

# classi generali ( PRODOTTI / CLIENTI )

// Prodotti
require __DIR__ . '/class/Product.php';

// Utenti
require __DIR__ . '/class/User.php';

// Aggiungo un po' di prodotti
$shirts = [
    new Cloth('Shirt', 'Rufus', 19.99, 'lorem shirt', 'L', 'Green'),
    new Cloth('Shirt', 'Versace', 69.99, 'lorem shirt', 'M', 'Red'),
    new Cloth('Shirt', 'Supreme', 59.99, 'lorem shirt', 'M', 'White'),
    new Cloth('Shirt', 'Youth Club', 29.99, 'lorem shirt', 'L', 'Grey'),
];
var_dump($shirts);
$cars = [
    new Car('Model X', 'Tesla', 300000, 'lorem car', 2500, 'Electric'),
    new Car('Baracca', 'Subaru', 200000, 'lorem car', 2200, 'Gasoline'),
    new Car('Megane', 'Renault', 100000, 'lorem car', 2300, 'Diesel'),
    new Car('Panda', 'Fiat', 3000001, 'lorem car', 2800, 'Gas')
];
var_dump($cars);

// aggiungo utenti
$users = [
    new User('Gabriele', 'Vava98', 'mail.mail@gmial.com', '123457AB'),
    new User('Franco', 'franco27', 'mail.mail@gmial.com', '67534BFJ'),
    new User('Ugo', 'Ugobossino', 'mail.mail@gmial.com', '6423979RF'),
    new User('Stefano', 'fanoSte', 'mail.mail@gmial.com', 'HDFTY868')
];
var_dump($users);

var_dump($users[1]->setCreditCard('saojosjao'));
var_dump($users[1]->getCreditCard());

// classe carta di credito
class CreditCard {
    protected $cardNumber;
    protected $cvv;
    protected $expiry;

    function __construct(string $cardNumber, int $cvv, string $expiry) {
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiry = $expiry;
    }
}

# Test CreditCard class
$cartaNuova = new CreditCard("1111-2222-4444-2222", 747, "01/26");

var_dump($cartaNuova);