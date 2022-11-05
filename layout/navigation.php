<?php
$mycontent = '<a href="index.php">Home</a>';

if (isset($_SESSION["logedIn"])) {
    $mycontent .= '
            <a id="right" href="index.php?page=logout">Logout</a>     
        ';
} else {
    $mycontent .= '
            <a id="right" href="index.php?page=login">Login</a>
            <a id="right" href="index.php?page=register">Register</a>
            
        ';
}

if (isset($mytitle)) {
    $mycontent .= '<div id="center">' . $mytitle . '</div>';
} else {
    $mycontent .= '<div id="center"> Webapp </div>';
}

echo $mycontent;
