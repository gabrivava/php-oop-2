<?php


class User
{
    public $name;
    public $username;
    protected $mail;
    protected $password;
    private $creditCard;

    public function __construct(string $name,string $username,string $mail,string $password, string $creditCard = null) {
        $this->name = $name;
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
        $this->creditCard = $creditCard;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getPassword()
    {
        return $this->password;
    }

    // funsione set per Credit card
    public function getCreditCard()
    {
        $this->creditCard;
    }
    public function setCreditCard(string $valore)
    {
        $this->creditCard = $valore;
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