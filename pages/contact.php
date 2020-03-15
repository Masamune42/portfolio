<?php ob_start(); ?>

<?php
require '../utile/formatage.php';
if (isset($_POST['mail']) && isset($_POST['objet']) && isset($_POST['message'])) {
    $to = "test@test.fr";
    $from = isset($_POST['mail']);
    $object = isset($_POST['objet']);
    $message = isset($_POST['message']);
    mail($to, $object, $message, $from);
?>
    <div class="alert alert-success" role="alert">
        Message envoyé !
    </div>
<?php } ?>

<div class="container text-center" id="contact">
    <?= formatageTitre("Mes informations personnelles"); ?>
    <!-- marge extérieur de 5 -->
    <!-- <h2 class="m-5 perso_bgBlue text-white rounded-lg p-3">> Mes informations personnelles <</h2> <table class="table table-borderless"> -->
    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="../sources/images/contact/tel.png" style="width: 100px"></td>
                <td><img src="../sources/images/contact/yt.png" style="width: 100px"></td>
                <td><img src="../sources/images/contact/fb.png" style="width: 100px"></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00 00 00 00 00</td>
                <td><a href="https://www.youtube.com" target="_blank">Page Youtube</a></td>
                <td><a href="https://www.facebook.com" target="_blank">Page Facebook</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container text-center">
    <?= formatageTitre("Formulaire de contact"); ?>
    <h2 class="m-5 perso_colorBlueLight"></h2>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
        </div>
        <div class="form-group">
            <label for="objet">Objet :</label>
            <select class="form-control" id="objet" name="objet">
                <option value="question">Question</option>
                <option value="remarque">Remarque</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea class="form-control" id="message" rows="3" name="message" placeholder="Votre message..."></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>
<?php
$content = ob_get_clean();

require "commons/template.php";
