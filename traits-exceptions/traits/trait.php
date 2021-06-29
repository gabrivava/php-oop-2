<?php
/* Create un paio di traits da usare nella classe figlia. */

trait Name{
    protected $name;
    public function getName()
    {
        return $this->name;
    }
}
trait Email{
    protected $email;
    public function getEmail()
    {
        return $this->email;
    }
}