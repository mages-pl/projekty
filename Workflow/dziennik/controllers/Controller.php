<?php
/**
 * Główny kontroler odpowiadający za komunikację z klasą bazy wykorzystywany w innych kontrolerach.
 */
require_once '../../classes/Database.php';

class Controllers extends Database
{
	public $update_row = 'Dane zakutalizowane';
	public $remove_row = 'Usunięto element';
	public $add_row = 'Dodano element';
}
