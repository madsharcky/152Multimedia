<?php
$mytitle = "Login";
$mycontent = "
    <h1>Login Success</h1>
    <p>Welcome " . $_SESSION["UserName"] . "</p>      
";
echo $mycontent;
?>