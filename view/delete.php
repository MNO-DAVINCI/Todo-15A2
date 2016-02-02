<h2>Bevestigen</h2>
<p>Weet je zeker dat je deze rij wilt verwijderen?</p>
	
<form method="post" action="delete.php?id=<?= $_GET['id']; ?>" class="forms">
	<row>
		<column cols="6">
			<input type="text" name="omschrijving" value="<?= $omschrijving; ?>" disabled>
		</column>
	</row>
	<section>
	        <button type="green" name="prompt" value="ja">Ja</button> <button type="red" name="prompt" value="nee">Nee</button>
	</section>
</form>