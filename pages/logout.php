<?php
$mytitle = "Logout";
session_destroy();
$mycontent = '
    <h1>Du wurdest erfolgreich abgemeldet</h1>    
    <form action="" method="get">
        <button name="page" value="welcome">zurück zu Startseite</button>
    </form>
';
echo $mycontent;
?>