<?php

class UserManager {

    function __construct($dbConnection) {
        $this->connection = $dbConnection;
    }

    function registerUser($Email, $Password, $Name) {
        try{
            $preparedStatement = $this->connection->prepare("INSERT INTO Users (Email, loginPWD, Name) VALUES (:Email, :Password, :Name)");
            $preparedStatement->execute(["Email" => $Email, "Password" => $Password, "Name" => $Name]);
            return True;
        }
        catch(PDOException $e){
            return False;
        }
    }
    
    function getID($Email, $Password){
        // $codedPassword = $this->codePassword($Password, $Email);
        $preparedStatement = $this->connection->prepare("SELECT ID FROM Users WHERE Email = :Email AND loginPWD = :codedPassword");
        $preparedStatement->execute(["Email" => $Email, "codedPassword" => $Password]);

        if ($preparedStatement->rowCount()!=0){
            return $preparedStatement->fetch()["ID"];
        }
        else {
            return false;
        }
    }
    function codePassword($Password, $Email){
        $preparedStatement = $this->connection->prepare("
            declare @rawPassword varchar(200) = :Password, @Email VARCHAR(200) = :Email, @codedPassword BINARY(32)
            exec getPWD @rawPassword, @Email, @codedPassword output 
            select @codedPassword as pwd
        ");
        $preparedStatement->execute(["Password" => $Password, "Email" => $Email]);
        if ($preparedStatement->rowCount()!=0){
            return $preparedStatement->fetch()["pwd"];
        }
        else {
            return "";
        }
    }
    function setLastVisit($ID){
        $preparedStatement = $this->connection->prepare("update Users set lastVisited = GETDATE(), VisitCount = VisitCount + 1 where ID = :ID");
        $preparedStatement->execute(["ID" => $ID]);
    }
    function getUserName($ID){
        $preparedStatement = $this->connection->prepare("SELECT Name FROM Users WHERE ID = :ID");
        $preparedStatement->execute(["ID" => $ID]);
        return $preparedStatement->fetch()["Name"];
    }

}
?>