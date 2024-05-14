
<h1> Resultado</h1>

<br>
<br>
<br>

<?php

$mysqli = new mysqli("127.0.0.1:3307", "root", "", "final");


$query = "SELECT nome_chapa, COUNT(codigo_chapa) AS votos_chapa,
                  ROUND((COUNT(codigo_chapa) / (SELECT COUNT(*) FROM chapa) * 100), 2) AS porcentagem,
                  (SELECT COUNT(*) FROM chapa) AS total_votos FROM chapa GROUP BY codigo_chapa";


$resultado = $mysqli->query($query);


if ($resultado->num_rows > 0) {

    echo "<table border='1'>;

        <tr>
            <th>Nome da Chapa</th>
            <th>Votos da Chapa</th>
            <th>Percentual</th>
            <th>Total Votos</th>
        </tr>";


while ($row = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>". $row["nome_chapa"]. "</td>";
    echo "<td>". $row["votos_chapa"]. "</td>";
    echo "<td>". $row["porcentagem"]. "%</td>";
    echo "<td>". $row["total_votos"]. "</td>";
    echo "</tr>";
}


echo "</table>";

}

else{

    echo "<strong> Nenhum Registro Encontrado! </strong>";

}

$mysqli->close();

?>

<br>
<br>

<a href="inicio.html">

        <button>Voltar</button>

</a>

 
<style>

    table{

        margin-left: auto;
        margin-right: auto;
        width: 21%;
        background-color: #FFFFFF;
        border-collapse: collapse;
        border-width: 2px;
        border-color: #000000;
        border-style: solid;
        color: #000000;
        text-align: center;


    }

    th{

        background-color: #e6e6e6;

    }



    h1{


        margin-top: 150px;
        text-align: center;
        font-family: Verdana, sans-serif;
        font-weight: 100;
        color:#000000;
        font-size:30px;

    }

    button{

        margin-left: 750px;

        border: solid;

        border-width: 1px;

        cursor: pointer;

        padding: 5px;

    }

    strong{

        margin-left: 750px;
        font-size: 20px;

    }

</style>



