<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">Exemple "Bookmark"</h1>
		<p>Cette application est l'application de base de Pabana vous permettant de vous familiariser avec son fonctionnement.<br />
		Cette page d'accueil vous permet de voir un diagnositque des différents points nécessaire au fonctionnement de Pabana.<br />
		Depuis le menu vous pouvez accéder aux exemples de code et à la documentation en ligne de Pabana.</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p><a class="btn btn-secondary" href="/sample/bookmark/create-form" role="button">Ajouter un marque page</a></p>
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Titre</th>
						<th scope="col">URL</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($armBookmarkList as $armBookmark) { ?>
					<tr>
						<th scope="row"><?= $armBookmark['bok_id']; ?></th>
						<td><?= $armBookmark['bok_name']; ?></td>
						<td><a href="<?= $armBookmark['bok_url']; ?>" target="_blank"><?= $armBookmark['bok_url']; ?></a></td>
						<td>
							<a href="/sample/bookmark/modify-form/<?= $armBookmark['bok_id']; ?>">Modifier</a><br />
							<a href="/sample/bookmark/delete-form/<?= $armBookmark['bok_id']; ?>">Supprimer</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<hr>
</div>