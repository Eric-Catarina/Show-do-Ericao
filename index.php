<?php
include "questoes.php";

$id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Ericao</title>
</head>

<body>





    <?php


    function GeraButoesDasAlternativas($vetorDasAlternativas, $id)
    {

        echo '<form action="index.php?id=', $id + 1, '"  method="post">';
        for ($indiceAlternativaAtual = 0; $indiceAlternativaAtual < 4; $indiceAlternativaAtual++) {
            echo '<input type="radio" name="radioResposta">';
            echo ($vetorDasAlternativas[$id][$indiceAlternativaAtual]);
            echo "<br>";
        }
        echo '<input type="submit" value="Enviar"  name="botaoRadioResposta">';

        echo "</form>";
    };
    function GeraTituloPergunta($id)
    {

        global $vetorEnunciados;
        echo ($vetorEnunciados[$id]);
        echo "<br>";
        echo "<br>";
    }
    GeraTituloPergunta($id);
    GeraButoesDasAlternativas($vetorAlternativas, $id);

    ?>


    <br>





</body>

</html>