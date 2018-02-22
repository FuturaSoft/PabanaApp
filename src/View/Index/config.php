<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Configuration de <?= $_GET['type']; ?></h2>
            <?php if ($_GET['type'] == 'php') {
                phpinfo();
            } else if ($_GET['type'] == 'pabana') {
            ?>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Paramètre</th>
                        <th scope="col">Valeur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($arsConfiguration as $sConfigKey => $sConfigValue) {
                    ?>
                    <tr>
                        <th scope="row"><?= $sConfigKey; ?></th>
                        <td><?= $sConfigValue; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>
    <hr>
</div>