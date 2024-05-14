<?php

include('config.php');


$matricula = $_POST['matricula'];


$sql = "INSERT INTO `classe`(`matricula`) VALUES ('$matricula')";


if ($conn->query($sql) === TRUE) {

    header('Location: confirmacao1.php');

}


?>