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
        $addUczen = (new UczniowieController())->table('listauczniow')->insert($dane);

        return $this->add_row;
    }
public function updateUczen($dane,$id) {
    $updateUczen = (new UczniowieController())->table('listauczniow')->where('listaUczniow','=',$id)->update($dane);

     return $this->update_row;
}
    public function editUczen($id) { 
        $editUczen = (new UczniowieController())->table('listauczniow')->where('listaUczniow','=',$id)->get();
    
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
    header('Location:index.php');
}
if (isset($_POST['edycjaUczniaSubmit'])) {
    $update = (new UczniowieController())->updateUczen($_POST,$_GET['idUczen']);
    echo "Edycja zakonczona";
    // header('Location:index.php');
}
if(isset($_GET['idUczen']))  {

     $edit = (new UczniowieController())->editUczen($_GET['idUczen']);

     print_r($edit);

    echo "uczen edycja";
}
