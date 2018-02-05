<div class="jumbotron">
	<div class="container">
		<h1 class="display-4">Bienvenue sur Pabana <?php echo PAB_VERSION . ' "' . PAB_NAME . '"'; ?></h1>
		<p>Cette application est l'application de base de Pabana vous permettant de vous familiariser avec son fonctionnement.<br />
		Cette page d'accueil vous permet de voir un diagnositque des différents points nécessaire au fonctionnement de Pabana.<br />
		Depuis le menu vous pouvez accéder aux exemples de code et à la documentation en ligne de Pabana.</p>
		<h3 class="display-5">Bon codage ;)</h3>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Environnement</h2>
			<ul>
				<li>Votre système d'exploitation est <?php echo $sOperatingSystem; ?>.</li>
				<?php
				if (version_compare(PHP_VERSION, '5.6.0') < 0) {
				    echo '<li class="text-danger">Votre version de PHP est inférieur à PHP 5.6 (PHP ' . PHP_VERSION . ').</li>';
				} else {
					echo '<li class="text-success">Votre version de PHP est supérieur ou égal à PHP 5.6 (PHP ' . PHP_VERSION . ').</li>';
				} ?>
			</ul>
		</div>
		<div class="col-md-6">
			<h2>Système de fichier</h2>
			<ul>
				<li>Cette application est stockée dans le répertoire :<br />
				"<?php echo APP_ROOT; ?>".</li>
				<?php if ($bTmpWritable === true) {
					echo '<li class="text-success">Vous avez les droits en écriture sur le répertoire :<br />"' . APP_ROOT . DS . 'data' . DS . 'tmp".</li>';
				} else {
					echo '<li class="text-danger">Vous n\'avez pas les droits en écriture sur le répertoire :<br />"' . APP_ROOT . DS . 'data' . DS . 'tmp".</li>';
				} ?>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Base de données</h2>
			<ul>
			<?php
			$arsTestDriver = array(
				'mysql' => 'MySQL (ou MariaDB)',
				'odbc' => 'ODBC (Access, ...)',
				'pgsql' => 'PostgreSQL',
				'sqlite' => 'SQLite',
				'sqlsrv' => 'SQL Server');
			foreach ($arsTestDriver as $sTestDriver => $sTestName) {
				if (in_array($sTestDriver, $arsAvailableDriver)) {
					echo '<li class="text-success">Le driver de connexion à "' . $sTestName . '" est activé.</li>';
				} else {
					echo '<li class="text-danger">Le driver de connexion à "' . $sTestName . '" n\'est pas activé.</li>';
				}
			} ?>
			</ul>
		</div>
		<div class="col-md-6">
			<h2>Configuration</h2>
			<p>Le fichier de configuration de Pabana est localisé dans :<br />
			"<?php echo APP_ROOT . DS . 'config' . DS . 'pabana.php'; ?>"</p>
			<p><a class="btn btn-secondary" href="/index/config/type/pabana" role="button">Afficher la configuration de Pabana &raquo;</a></p>
			<p>Le fichier de configuration de PHP actuellement chargé est :<br />
			"<?php echo php_ini_loaded_file(); ?>".</p>
			<p><a class="btn btn-secondary" href="/index/config/type/php" role="button">Afficher la configuration de PHP &raquo;</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h2>Informations sur cette page</h2>
			<p>Controller : <?php echo $sControllerName; ?> - Action : <?php echo $sActionName; ?><br />
			Localisation du controller :<br />
			<?php echo $sControllerPath; ?><br />
			Localisation de la vue :<br />
			<?php echo $sViewPath; ?></p>
		</div>
		<div class="col-md-6">
			<h2>Documentation</h2>
			<p>Vous pouvez trouver sur le site officiel de Pabana toutes la documentation nécessaire au fonctionnement de celui-ci.</p>
			<p><a class="btn btn-secondary" href="https://pabana.futurasoft.fr/documentation/quickstart" target="_blank">Bien commencer &raquo;</a></p>
			<p><a class="btn btn-secondary" href="https://pabana.futurasoft.fr/documentation" target="_blank">Documentation &raquo;</a></p>
			<p><a class="btn btn-secondary" href="https://pabana.futurasoft.fr/api" target="_blank">API &raquo;</a></p>
		</div>
	</div>
	<hr>
</div>