<h2>Wijzigen</h2>

<form method="post" action="change.php?id=<?= $_GET['id']; ?>" class="forms">
	<row>
		<column cols="6">
			<input type="text" name="omschrijving" value="<?= $omschrijving; ?>">
		</column>
	</row>
	<section>
	        <button type="green" name="prompt" value="save">Opslaan</button> <button type="red" name="prompt" value="cancel">Annuleren</button>
	</section>
</form>