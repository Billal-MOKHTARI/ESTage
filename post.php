<?php
session_start();
require_once 'common/head.php';
if(isset($_POST["username"]) && isset($_POST["password"])){
    $sqlQuery = 'SELECT emailAccount, passwordAccount FROM companies, accounts
    WHERE emailAccount = emailCompany';
    $compsStatement = $mysqlClient->prepare($sqlQuery);
    $compsStatement->execute();
    $comps = $recipesStatement->fetchAll();

    // On affiche chaque recette une à une
    foreach ($comps as $comp) {
        if($comp["username"] == $_POST["username"] && password_hash($_POST["password"]) == $comp["password"]){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
        }
    }
}

?>