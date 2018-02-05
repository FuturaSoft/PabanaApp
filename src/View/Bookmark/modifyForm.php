<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Modifier un marque page</h2>
			<?php if (isset($_GET['error'])) {
				if ($_GET['error'] == 'empty_name') {
					$sError = 'Veuillez renseigner le nom du marque page.';
				} else if ($_GET['error'] == 'empty_url') {
					$sError = 'Veuillez renseigner l\'URL du marque page.';
				} else if ($_GET['error'] == 'unvalid_url') {
					$sError = 'L\'URL que vous avez renseignée n\'est pas valide.';
				}
				echo '<div class="alert alert-warning" role="alert">' . $sError . '</div>';
			} ?>
			<form action="/sample/bookmark/modify/<?php echo $nId; ?>" method="post">
				<div class="form-group">
					<label for="name">Nom du marque page</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?php echo $armBookmark['bok_name']; ?>">
				</div>
				<div class="form-group">
					<label for="url">Url du marque page</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="URL" value="<?php echo $armBookmark['bok_url']; ?>">
				</div>
				<button type="submit" class="btn btn-primary">Modifier</button>
			</form>
		</div>
	</div>
	<hr>
</div>