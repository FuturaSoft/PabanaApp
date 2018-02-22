<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Ajouter un marque page</h2>
            <?php if (isset($_GET['error'])) {
                if ($_GET['error'] == 'empty_name') {
                    $sError = 'Veuillez renseigner le nom du marque page.';
                } elseif ($_GET['error'] == 'empty_url') {
                    $sError = 'Veuillez renseigner l\'URL du marque page.';
                } elseif ($_GET['error'] == 'unvalid_url') {
                    $sError = 'L\'URL que vous avez renseignée n\'est pas valide.';
                }
                echo '<div class="alert alert-warning" role="alert">' . $sError . '</div>';
            } ?>
            <form action="/sample/bookmark/create" method="post">
                <div class="form-group">
                    <label for="name">Nom du marque page</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nom">
                </div>
                <div class="form-group">
                    <label for="url">Url du marque page</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL">
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div>
    <hr>
</div>