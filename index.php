<!-- http://localhost/152Multimedia/index.php -->

<?php
session_start();
require_once "utils/db_setup.php";
require_once "utils/userManager.php";
$userManager = new UserManager($connection);

if (isset($_POST["controller"])) {
    include "controller/".$_POST["controller"].".php";
}
if (isset($_POST["page"])) {
    $body = "pages/".$_POST["page"].".php"; // view is the name of the page to be displayed and is set in the controller
    $mytitle = ucfirst($_POST["page"]); // title is the name of the page to be displayed and is set in the controller
} else {
    if (isset($_GET["page"])) {
        $body = "pages/".$_GET["page"].".php"; // view is the name of the page to be displayed and is set in the controller
        $mytitle = ucfirst($_GET["page"]); // title is the name of the page to be displayed and is set in the controller
    } else {
        $body = "pages/welcome.php";
        $mytitle = "Welcome";
    }
}

include "layout/baseLayout.php";

?>