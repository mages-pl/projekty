<?php
/**
 * Przykładowy kontroler Uczniowie (który zawiera metody za pomocą których mozemy odpowiednio korzystac z tego co oferuje nam klasa bazy danych).
 */
require_once 'Controller.php';

class UczniowieController extends Controllers
{
    public function index()
    {
        $uczniowie = (new UczniowieController())->table('listauczniow')->get();

        return $uczniowie;
    }

    public function addUczen($dane)
    {
        $deleteUczen = (new UczniowieController())->table('listauczniow')->insert($dane);

        return $this->add_row;
    }

    public function deleteUczen($id)
    {
        $deleteUczen = (new UczniowieController())->table('listauczniow')->where('listaUczniow', '=', $id)->delete();

        return $this->remove_row;
    }
}

if (isset($_POST['usunUczniaSubmit'])) {
    print_r($_POST);
    $remove = (new UczniowieController())->deleteUczen($_POST['ID_DeleteUczen']);

    echo $remove;
}
if (isset($_POST['dodajUczniaSubmit'])) {
    $add = (new UczniowieController())->addUczen($_POST);
    header('Location:index.php');
}
