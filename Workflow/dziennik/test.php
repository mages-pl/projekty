<?php


class postac extends klasa2
{
    public $nazwisko;

    ///protected $dana = 's';

    public function pobierzImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    public function pobierznazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko.$this->imie;

        echo $this->dana;
        //return $this->nazwisko;
    }
}

class klasa2
{
    private $imie = '';
    protected $dana = 's';
}
class klasa 3{
    
}

for ($i = 0; $i < 10; ++$i) {
    $postac = (new postac())->pobierzImie(rand(0, 10));
    echo '<br/>'.$postac->pobierznazwisko(rand(0, 100));
}
//echo $postac1->dana;
