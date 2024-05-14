<?php

include('config.php');


$codigo_chapa = $_POST['codigo_chapa'];

$nome_chapa = $_POST['nome_chapa'];

$lider_chapa = $_POST['lider_chapa'];

$sublider_chapa = $_POST['sublider_chapa'];


$sql2 = "INSERT INTO `chapa`(`codigo_chapa`, `nome_chapa`, `lider_chapa`, `sublider_chapa`) VALUES ('$codigo_chapa', '$nome_chapa', '$lider_chapa', '$sublider_chapa')";


if ($conn->query($sql2) === TRUE) {

    header('Location: confirmacao2.php');

}


?>