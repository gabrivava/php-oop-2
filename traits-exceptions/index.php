<?php

/* Descrizione:
- Inventate due classi a piacere una che estende l'altra.
- Ciascuna classe avrá un constuctor e un paio di metodi a piacere.
- Create un paio di traits da usare nella classe figlia.
- in una funzione gestite eventuali errori usando un exception
- create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump)
- invocate il metodo nel quale avete usato l'exception passado al metodo dei valori sbagliati
- usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore.
try {to have fun} catch (panic $p) { $p->getMessage() } */

include __DIR__ . '/traits/trait.php';
include __DIR__ . '/classes/classi.php';

// test new Person
$io = new Person('gab', 'vava');
var_dump($io);

/* in una funzione gestite eventuali errori usando un exception */
function password($string) {
    if (is_int($string)) {
        throw new Exception('Is not a string!');
    }
        return $string;
    }
/* usate il try/catch per gestire il la richiesta e mostrare all'utente un messaggio di errore. */
try {
    echo password('ciao');
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}

/* create una struttura dati (array di oggetti) e usate un ciclo foreach per mostrare i dati a schermo (con html, non var_dump) */
$users=[
    new User("marco","alfo","city","marco@email.it","1234"),
    new User("ugo","rossi","ciao","ugo@email.it","1234"),
    new User("france","cardin","carl","france@email.it","1234"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-2</title>
</head>
<body>
    <h1>Users</h1>
    <?php 
        foreach ($users as $user) : ?>
            <h2>Nome:<?= $user->getName() ?></h2>
            <h2>Cognome:<?= $user->lastname ?></h2>
            <h3>Nickname:<?= $user->nickname ?></h3>
            <p>Email:<?= $user->getEmail() ?></p>
            <p>Password:<?= $user->password ?></p>
        <?php endforeach;
    ?>
</body>
</html>