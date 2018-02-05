<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Supprimer un marque page</h2>
			<form action="/sample/bookmark/delete/<?php echo $nId; ?>" method="post">
				<div class="form-group">
					<label for="name">Nom du marque page</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nom" value="<?php echo $armBookmark['bok_name']; ?>" disabled>
				</div>
				<div class="form-group">
					<label for="url">Url du marque page</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="URL" value="<?php echo $armBookmark['bok_url']; ?>" disabled>
				</div>
				<button type="submit" class="btn btn-primary">Supprimer</button>
			</form>
		</div>
	</div>
	<hr>
</div>