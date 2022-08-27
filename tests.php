<?php 



    $loginUsuario = $_POST["login"];
    $senhaUsuario = $_POST["senha"];
    $arquivoUsuarios = fopen("./usuarios.json", "r+");

    $conteudoArquivoUsuarios = fread($arquivoUsuarios, "1000");

    echo($conteudoArquivoUsuarios);
    echo "<br>";

function AdicionaLoginSenhaAoArquivoUsuarios(){

    global $arquivoUsuarios;
    global $loginUsuario;
    global $senhaUsuario;
    global $conteudoArquivoUsuarios;

    $conteudoArquivoUsuariosArray = explode("}", $conteudoArquivoUsuarios);

    $conteudoArquivoUsuariosArray[] = ['loginUsuario' => $loginUsuario, 'senhaUsuario' => $senhaUsuario];
    fwrite($arquivoUsuarios, json_encode($conteudoArquivoUsuariosArray));
}
AdicionaLoginSenhaAoArquivoUsuarios();


fclose($arquivoUsuarios);
?>