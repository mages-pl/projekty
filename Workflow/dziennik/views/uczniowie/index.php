
<?php
require_once '../../controllers/UczniowieController.php';

?>
<?php include '../main/header.php'; ?>
<div class="container">
	<div class="row my-4">
		<h3>Uczniowie</h3>
	</div>
	<div class="row mb-4 pb-4">
		<a href="./add.php" class="btn btn-outline-primary btn-sm px-4" data-toggle="tooltip" data-placement="bottom" title="Dodaj ucznia"><span class="fa fa-plus"></span></a>
	</div>
	<div class="row">
		<table class="table table-sm table-striped table-hover col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<thead>
				<tr>
					<th>Nr</th>
					<th>Nazwisko</th>
					<th>Imię</th>
					<th>Klasa</th>
					<th class="text-center">Opcje</th>
				</tr>
			</thead>
			<tbody>
				<?php
                print_r((new UczniowieController())->index());
                    foreach ((new UczniowieController())->index() as $uczen) {
                        ?>
				<tr>
					<td>#<?php echo $uczen['listaUczniow']; ?> 
					</td>
					<td><?php echo $uczen['nazwisko']; ?> 
					</td>
					<td><?php echo $uczen['imie']; ?>
					</td>
					<td><?php echo $uczen['nazwa']; ?>
					</td>
					<td class="text-center">
						<form method="POST">
							<input type="hidden" name="ID_DeleteUczen" value="<?php echo $uczen['listaUczniow']; ?>" />
							<button name="usunUczniaSubmit" title="Usuń" class="btn btn-danger btn-sm btn-outline-danger px-4" data-toggle="tooltip" data-placement="bottom">
								<span class="fa fa-times"></span>
							</button>
							<a title="Edytuj" data-toggle="tooltip" data-placement="bottom" class="btn btn-outline-info btn-sm px-4" href="./edit.php?idUczen=<?php echo $uczen['listaUczniow']; ?>"><span class="fa fa-pen"></span></a>
						</form>
					</td>
				</tr>
			<?php
                    }
            ?>
			</tbody>
		</table>
	</div>
</div>
<?php include '../main/footer.php'; ?>