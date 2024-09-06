<?php

$nome = $_POST["name"];
$password = $_POST["password"];
$date = $_POST["date"];
$number = $_POST["number"];
$color = $_POST["color"];
$range = $_POST["range"];
$user = $_POST["user"];
$email = $_POST["email"];
$nome2 = $_POST["name2"];
$nome3 = $_POST["name3"];

$resposta["status"] = "";
$resposta["message"] = "";


if ($nome == "" || $password == "" || $date == "" || $number == "" || $color == "" || 
    $range == "" || $user == "" || $email == "" || $nome2 == "" || $nome3 == "") {
    
    $resposta["status"] = "erro";
    $resposta["message"] = "Todos os campos são obrigatórios.";
} else {
    $resposta["status"] = "sucesso";
    $resposta["message"] = "Cadastro realizado com sucesso";
}

echo(json_encode($resposta));

?>
