<?php


class Login extends Database
{
    public $zalogowany;
    private $login;
    private $haslo;

    public function podajDane($login, $haslo)
    {
        $this->login = $login;
        $this->haslo = $haslo;

        return $this;
    }

    public function auth()
    {
        //$this->table('listanauczycieli')->where('email','=',$login)->where('haslo','=',$haslo)->get();
        // $this->table('nauczyciel')
    }
}
