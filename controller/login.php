<?php

    $_SESSION["Email"] = $_POST["Email"];
    
    if ($userManager->getID($_POST["Email"], $_POST["PWD"])){
    $_SESSION["ID"] = $userManager->getID($_POST["Email"], $_POST["PWD"]);
    $_SESSION["UserName"] = $userManager->getUserName($_SESSION["ID"]);
    $userManager->setLastVisit($_SESSION["ID"]);
    $_SESSION["logedIn"] = true;
    
    $_POST["page"] = "loginSuccess";
}
else {
    $loginError = "Credentials are wrong";
    $_GET["page"] = "login";
}
?>