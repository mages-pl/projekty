<?php
/**
 * Przykładowy kontroler Uczniowie (który zawiera metody za pomocą których mozemy odpowiednio korzystac z tego co oferuje nam klasa bazy danych).
 */
require_once 'Controller.php';

class UczniowieController extends Controllers
{
    public function index()
    {
        $uczniowie = (new UczniowieController())->table('listauczniow')->join('klasa', 'klasa.idKlasa', 'listauczniow.Klasa_idKlasa')->get();
        //$uczniowie = (new UczniowieController())->table('listauczniow')->where('listaUczniow', '=', '70')->orWhere('imie', '=', 'Elżbieta')->orWhere('imie', '=', 'Wojciech')->get();

        return $uczniowie;
    }

    public function addUczen($dane)
    {
        $addUczen = (new UczniowieController())->table('listauczniow')->insert($dane);

        return $this->add_row;
    }

    public function updateUczen($dane, $id)
    {
        $updateUczen = (new UczniowieController())->table('listauczniow')->where('listauczniow', '=', $id)->update($dane);

        return $this->update_row;
    }

    public function editUczen($id)
    {
        $editUczen = (new UczniowieController())->table('listauczniow')->where('listauczniow', '=', $id)->get();

        return $editUczen;
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
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_POST['edycjaUczniaSubmit'])) {
    $add = (new UczniowieController())->updateUczen($_POST, $_GET['idUczen']);
    header('Location:'.$_SERVER['HTTP_REFERER']);
    //echo "<script type='text/javascript'>alert('Zaktualizowano');</script>";
}
if (isset($_GET['idUczen'])) {
    $edit = (new UczniowieController())->editUczen($_GET['idUczen']);
    //print_r($edit);
}
