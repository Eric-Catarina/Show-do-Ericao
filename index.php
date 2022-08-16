<?php
//$perguntasJson = file_get_contents("perguntas.json");
//$conteudoPerguntasJson = json_decode($perguntasJson);

    $id = $_GET["id"];



    if($id != 0 ){
    $resposta = $_POST["radioResposta"];
    }


$vetorEnunciados =
    [
        '<h1>Qual bicho transmite Doença de Chagas ?</h1>',
        "Qual fruto é conhecido no Norte e Nordeste como jerimum?",
        "Qual é o coletivo de cães?",
        "Qual é o triângulo que tem todos os lados diferentes?",
        "O adjetivo venoso está relacionado a:"
    ];
$vetorAlternativas = array(

    array(
        "Abelha",
        "Barata",
        "Pulga",
        "Barbeiro"
    ),

    array(
        "Caju",
        "Abóbora",
        "Chuchu",
        "Côco"
    ),

    array(
        "Matilha",
        "Rebanho",
        "Alcateia",
        "Manada"
    ),

    array(
        "Equilátero",
        "Isóceles",
        "Escaleno",
        "Trapézio"
    ),

    array(
        "Vela",
        "Vento",
        "Vênia",
        "Veia"
    )
);


$vetorAlternativasCorretas = array(3, 1, 0, 2, 3);
/*
$matrizAlternativas = array(
    $vetorEnunciados,
    $vetorAlternativas
);
*/
/*
for($contadorI = 0; $contadorI < 3; $contadorI ++){
    for($contadorJ = 0; $contadorJ< 3; $contadorJ++){
        echo ($matrizAlternativas[$contadorI][$contadorJ]);
        echo "<br>";
    }
};
*/

function carregaPerguntaPeloId($id)
{

    global $vetorEnunciados;
    global $vetorAlternativas;
    echo ($vetorEnunciados[$id]);
    echo "<br>";
    echo "<br>";
    GeraButoesDasAlternativas($vetorAlternativas, $id);
}
carregaPerguntaPeloId($id);

//echo $conteudoPerguntasJson->enunciado1;

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

        echo '<form action="index.php?id=',$id+1,'"  method="post">';
        for ($indiceAlternativaAtual = 0; $indiceAlternativaAtual < 4; $indiceAlternativaAtual++) {
            echo '<input type="radio" name="radioResposta">';
            echo ($vetorDasAlternativas[$id][$indiceAlternativaAtual]);
            echo "<br>";
        }
        echo '<input type="submit" value="Enviar"  name="botaoRadioResposta">';

        echo "</form>";
    };
    ?>


    <br>





</body>

</html>