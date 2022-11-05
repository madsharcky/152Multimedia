<?php
$mytitle = "Login";
if(isset($loginError)){
    $errorContent = "<div class='error'>$loginError</div>";
}
else{
    $errorContent = "";
}

if (isset($_SESSION["Email"])){
    $defaultMail = "value=" . $_SESSION["Email"];
}
else{
    $defaultMail = "autofocus";
}

$mycontent = '
<form action="" method="post">
    <div class="container">
        <h1>Login Seite</h1>
        <p>Please Log in to this page.</p>
        <hr>
        <p>Email: <input type="email" name="Email" ' . $defaultMail . ' required/></p>
        <p>Password: <input type="password" name="PWD" autofocus required/></p>
        <hr>
                ' . $errorContent . ' 
        <button name="controller" value="login">login</button>
    </div>
</form>     
    ';
echo $mycontent;
?>