<?php ob_start(); ?>

<h1>Page de contact</h1>

<?php
$content = ob_get_clean();

require "commons/template.php";
