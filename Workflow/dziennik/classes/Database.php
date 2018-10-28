<?php
/**
 * Klasa opisująca operacje na danych w bazie danych
 * by MJ.
 */
class Database
{
    private $host;
    private $uzytkownik;
    private $haslo;
    private $baza;

    private $polaczenie;

    public $table;
    public $where;

    public $order;
    public $limit;

    public $result;

    public function __construct()
    {
        $this->host = '192.168.64.2';
        $this->user = 'root';
        $this->password = '';
        $this->database = 'dziennik';

        $this->polaczenie = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die('Nie udalo sie nawiazac polaczenia');
    }

    public function where($pole, $operator, $warunek)
    {
        if ($operator == null) {
            $operator = '=';
        }

        $this->where = ' WHERE '.$pole.'  '.$operator.' "'.$warunek.'" ';

        return $this;
    }

    public function limit($limit)
    {
        $this->limit = ' LIMIT '.$limit;

        return $this;
    }

    private function przetwrzajDane($dane)
    {
        $this->atrybuty = '';
        $this->wartosci = '';

        foreach (array_keys($dane) as $k => $key) {
            if ($dane[$key] != '') {
                if (debug_backtrace()[1]['function'] == 'insert') {
                    $this->atrybuty .= $key.',';
                } else {
                    $this->atrybuty .= $key.' = "'.$dane[$key].'", ';
                }
            }
        }

        foreach (array_values($dane) as $v => $value) {
            if ($value != '') {
                if (debug_backtrace()[1]['function'] == 'insert') {
                    $this->wartosci .= '"'.$value.'",';
                }
            }
        }

        return $this;
    }

    public function insert($dane)
    {
        $this->result = 'INSERT INTO '.$this->table.'('.trim($this->przetwrzajDane($dane)->atrybuty, ',').') VALUES ('.trim($this->przetwrzajDane($dane)->wartosci, ',').')';

        //echo $this->result;

        return mysqli_query($this->polaczenie, $this->result);
    }

    public function update($dane)
    {
        $this->result = 'UPDATE '.$this->table.' SET  '.trim($this->przetwrzajDane($dane)->atrybuty, ' ,').$this->where;

//        echo $this->result;
        return mysqli_query($this->polaczenie, $this->result);
    }

    public function delete()
    {
        $this->result = mysqli_query($this->polaczenie, 'DELETE FROM '.$this->table.' '.$this->where);

        return $this->result;
    }

    public function get()
    {
        $this->result = mysqli_query($this->polaczenie, 'SELECT * FROM '.$this->table.' '.$this->where);

        return mysqli_fetch_all($this->result, MYSQLI_ASSOC);
    }

    public function table($tabela)
    {
        $this->table = $tabela;

        return $this;
    }
}
