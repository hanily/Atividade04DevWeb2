<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idArea = $_POST['idArea'];
$nome = $_POST['nome'];

try{
    $sql = "update area set nomeArera='$nome' where idArea=" .$idArea;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

?>