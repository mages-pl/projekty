<?php

require_once 'Controller.php';

class KlasyController extends Controllers
{
    public function index()
    {
        $klasy = (new KlasyController())->table('klasa')->get();

        return $klasy;
    }

    public function deleteKlasa($id)
    {
        $deleteKlasa = (new KlasyController())->table('listauczniow')->where('listaUczniow', '=', $id)->delete();

        return $this->remove_field;
    }
}
