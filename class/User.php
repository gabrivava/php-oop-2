<?php


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