<?php
/* Inventate due classi a piacere una che estende l'altra.
Ciascuna classe avrá un constuctor e un paio di metodi a piacere. */
class Person
{
    use Name;
    public $lastname;

    public function __construct(string $_name, string $_lastname) {
        $this->name = $_name;
        $this->lastname = $_lastname;
    }
}

class User extends Person{
    use Name;
    use Email;
    public $nickname;
    public $password;
    
    public function __construct($name, $lastname, $nickname, $email, $password)
    {
        //estendo il constructor di person anche a user
        //e poi definisco le nuove caratteristiche
        parent::__construct($name, $lastname);
        
        $this->nickname = $nickname;
        $this->email = $email;
        $this->password = $password;
    }
    //Solo user ha accesso a questa funzione
    public function subscribe()
    {
        return "Mi iscrivo alla newsletter";
    }
}