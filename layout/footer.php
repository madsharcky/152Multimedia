<?php
$loggedIn = "";
if (isset($_SESSION["UserName"])){
    $loggedIn = "logged in as " . $_SESSION["UserName"];
}
$mycontent = '
        <div id="leftFooter">' . $loggedIn . '</div>
        <div id="rightFooter">gemacht von Mad</div>     
';
echo $mycontent;
?>