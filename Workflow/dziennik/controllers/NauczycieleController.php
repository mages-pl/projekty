<?php
/**
 * Przykładowy kontroler Uczniowie (który zawiera metody za pomocą których mozemy odpowiednio korzystac z tego co oferuje nam klasa bazy danych).
 */
require_once 'Controller.php';

class NauczycieleController extends Controllers
{
    public function index()
    {
        $nauczyciele = (new NauczycieleController())->table('listanauczycieli')->get();

        return $nauczyciele;
    }

    public function addNauczyciel($dane)
    {
        $addNauczyciel = (new NauczycieleController())->table('listanauczycieli')->insert($dane);

        return $this->add_row;
    }

    public function updateNauczyciel($dane, $id)
    {
        $updateNauczyciel = (new NauczycieleController())->table('listanauczycieli')->where('idlistanauczycieli', '=', $id)->update($dane);

        return $this->update_row;
    }

    public function editNauczyciel($id)
    {
        $editNauczyciel = (new NauczycieleController())->table('listanauczycieli')->where('idlistanauczycieli', '=', $id)->get();

        return $editNauczyciel;
    }

    public function deleteNauczyciel($id)
    {
        $deleteNauczyciel = (new NauczycieleController())->table('listanauczycieli')->where('idlistanauczycieli', '=', $id)->delete();

        return $this->remove_row;
    }
}

if (isset($_POST['usunNauczycielaSubmit'])) {
    print_r($_POST);
    $remove = (new NauczycieleController())->deleteNauczyciel($_POST['ID_DeleteNauczyciel']);
    echo $remove;
}
if (isset($_POST['dodajNauczycielaSubmit'])) {
    $add = (new NauczycieleController())->addNauczyciel($_POST);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_POST['edycjaNauczycielaSubmit'])) {
    $add = (new NauczycieleController())->updateNauczyciel($_POST, $_GET['idNauczyciel']);
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
if (isset($_GET['idNauczyciel'])) {
    $edit = (new NauczycieleController())->editNauczyciel($_GET['idNauczyciel']);
    //print_r($edit);
}
