<?php
    $_SESSION["Email"] = $_POST["Email"];
    $_SESSION["Name"] = $_POST["Name"];

    if ($_POST["pwd"] != $_POST["pwdRepeat"]){
        $registerError = "Passwords do not match";
        $RegisterSuccess = False;
    }
    else{
        if ($userManager->registerUser($_POST["Email"], $_POST["pwd"], $_POST["Name"])){
            $RegisterSuccess = True;
        }
        else{
            $registerError = "Email already in use";
            $RegisterSuccess = False;
        }
    }

    if ($RegisterSuccess){
        $_POST["page"] = "registerSuccess";
    }
    else{        
        $_POST["page"] = "register";
    }

?>