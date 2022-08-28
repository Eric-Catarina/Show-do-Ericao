<?php 
    //json_decode Converte String Para Array
    //json_encode Converte Array Para String


    $loginUsuario = $_POST["login"];
    $senhaUsuario = $_POST["senha"];

    $inp = file_get_contents('arquivoUsuarios.json');
    
    $tempArray = json_decode($inp, true);

    $tempArray[] = ['batata' => 'maca'];
   
    $tempArray = json_encode($tempArray);

    echo ($tempArray);
    echo (gettype($tempArray));

    file_put_contents('arquivoUsuarios.json', $tempArray);
