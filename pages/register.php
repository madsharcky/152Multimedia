<?php
$mytitle = "Register";
if(isset($registerError)){
    $errorContent = '<div class="error">'.$registerError.'</div>';
    }
else{
    $errorContent = "";
    }

if (isset($_SESSION["Email"])){
    $defaultMail = "value=" . $_SESSION["Email"];
    }
else{
    $defaultMail = "";
    }

if (isset($_SESSION["Name"])){
    $defaultName = "value=" . $_SESSION["Name"];
    }
else{
    $defaultName = "";
    }

$mycontent = '
    <form action="" method="post">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="Email" id="email" ' . $defaultMail . ' required>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="Name" id="name" ' . $defaultName . ' required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>

            <label for="pwdRepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="pwdRepeat" id="pwdRepeat" required>
            <hr>
                ' . $errorContent . '            
            <button name="controller" value="register">Register</button>
        </div>     
    </form>
';

echo $mycontent;
?>