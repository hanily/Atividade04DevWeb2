<?php
try{
    $conexao = new PDO("mysql:host=localhost; dbname=projetoweb2","root","");
}catch(PDOException $e){
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCurso = $_POST['idCurso'];
$nome = $_POST['nome'];
$nota = $_POST['nota'];
$campus = $_POST['campus'];
$area = $_POST['area'];

try{
    $sql = "update curso set nomeCurso='$nome', notaCurso='$nota', idArea='$area', idCampus='$campus' where idCurso=".$idCurso;
    $conexao->exec($sql);
    echo "Editado com sucesso !!!";
}catch(PDOException $e){
    die("Ocorreu um erro " . $e->getMessage());
}

header('Location: ../../view/curso/buscarCurso.php');
?>