

<?php 
    //json_decode Converte String Para Array
    //json_encode Converte Array Para String

    $nomeDoArquivoUsuarios = 'arquivoUsuarios.json';

    if(! (file_exists($nomeDoArquivoUsuarios))){
        file_put_contents($nomeDoArquivoUsuarios,"");
    }
    
    if (isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['nome']) && isset($_POST['email'])) {
        $nomeUsuario =  $_POST["nome"];
        $emailUsuario = $_POST["email"];
        $loginUsuario = $_POST["login"];
        $senhaUsuario = $_POST["senha"];
        
        if(empty($loginUsuario) || empty($senhaUsuario) || empty($nomeUsuario) || empty ($emailUsuario)){
            header("Location: paginaInicial.php");
        }
    }
    
    $arquivoUsuariosString = file_get_contents('arquivoUsuarios.json');

    $arquivoUsuariosArray = json_decode($arquivoUsuariosString, true);

    $arquivoUsuariosArray[] = ["nomeUsuario" => $nomeUsuario, "emailUsuario"."\n" => $emailUsuario, "loginUsuario" => $loginUsuario, "senhaUsuario" => $senhaUsuario];
   
    $arquivoUsuariosArray = json_encode($arquivoUsuariosArray);

    file_put_contents('arquivoUsuarios.json', $arquivoUsuariosArray);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    
    <div class="backgroundTests">
    <form  action="paginaInicial.php" method="post" class="col-12">
    
        <button type="submit" class=" position-absolute top-50 start-50 translate-middle btn btn-info">
    
    </form>
    
    
    </div>
        
    
    </body>
    </html>
    