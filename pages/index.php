<?php ob_start(); ?>

<h1>Page d'accueil</h1>
<button type="button" class="btn btn-success">Valider</button>

<?php
$content = ob_get_clean();

require "commons/template.php";
