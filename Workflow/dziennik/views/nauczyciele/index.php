
<?php
require_once '../../controllers/NauczycieleController.php';

?>
<?php include '../main/header.php'; ?>
<div class="container">
	<div class="row my-4">
		<h3>Nauczyciele</h3>
	</div>
	<div class="row mb-4 pb-4">
		<a href="./add.php" class="btn btn-outline-primary btn-sm px-4" data-toggle="tooltip" data-placement="bottom" title="Dodaj nauczyciela"><span class="fa fa-plus"></span></a>
	</div>
	<div class="row">
		<table class="table table-sm table-striped table-hover col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<thead>
				<tr>
					<th>Nr</th>
					<th>Nazwisko</th>
					<th>Imię</th>
					<th data-toggle="tooltip" data-placement="top" title="Adres e-mail kontaktowy">Kontakt</th>
					<th class="text-center">Opcje</th>
				</tr>
			</thead>
			<tbody>
				<?php
                    foreach ((new NauczycieleController())->index() as $nauczyciel) {
                        ?>
				<tr>
					<td>#<?php echo $nauczyciel['idlistaNauczycieli']; ?> 
					</td>
					<td><?php echo $nauczyciel['nazwisko']; ?> 
					</td>
					<td><?php echo $nauczyciel['imie']; ?>
					</td>
					<td><a href="mailto:<?php echo $nauczyciel['email']; ?>"><?php echo $nauczyciel['email']; ?></a>
					</td>
					<td class="text-center">
						<form method="POST">
							<input type="hidden" name="ID_DeleteNauczyciel" value="<?php echo $nauczyciel['idlistaNauczycieli']; ?>" />
							<button name="usunNauczycielaSubmit" title="Usuń" class="btn btn-danger btn-sm btn-outline-danger px-4" data-toggle="tooltip" data-placement="bottom">
								<span class="fa fa-times"></span>
							</button>
							<a title="Edytuj" data-toggle="tooltip" data-placement="bottom" class="btn btn-outline-info btn-sm px-4" href="./edit.php?idNauczyciel=<?php echo $nauczyciel['idlistaNauczycieli']; ?>"><span class="fa fa-pen"></span></a>
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
<?php include '../main/footer.php';?>