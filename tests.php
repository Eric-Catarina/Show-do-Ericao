<?php 
    //json_decode Converte String Para Array
    //json_encode Converte Array Para String


    $loginUsuario = $_POST["login"];
    $senhaUsuario = $_POST["senha"];

    $arquivoUsuariosString = file_get_contents('arquivoUsuarios.json');

    $arquivoUsuariosArray = json_decode($arquivoUsuariosString, true);

    $arquivoUsuariosArray[] = [$loginUsuario => $senhaUsuario];
   
    $arquivoUsuariosArray = json_encode($arquivoUsuariosArray);

    file_put_contents('arquivoUsuarios.json', $arquivoUsuariosArray);
