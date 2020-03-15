<?php ob_start(); ?>

<div class="container text-center" id="contact">
    <!-- marge extérieur de 5 -->
    <h2 class="m-5 perso_colorBlueLight">Mes informations personnelles</h2>


    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="../sources/images/contact/tel.png" style="width: 100px"></td>
                <td><img src="../sources/images/contact/yt.png" style="width: 100px"></td>
                <td><img src="../sources/images/contact/FB.png" style="width: 100px"></td>
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
<?php
$content = ob_get_clean();

require "commons/template.php";
