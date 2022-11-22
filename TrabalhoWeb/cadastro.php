<?php

if(isset($_POST["nome"])
    && isset($_POST["telefone"])
    && isset($_POST["email"])){
        
    if(!empty($_POST["nome"])
    && !empty($_POST["telefone"])
    && !empty($_POST["email"])){
    
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];

    echo "Nome: $nome";
    echo "Telefone: $telefone";
    echo "E-mail: $email";
   
    }
}
?>