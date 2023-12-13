<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
    <script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>

<?php 
    include "conexao_bd.php";

    $nomePais = $_POST["txtNomePais"];
    $email = $_POST["txtEmail"];
    $nomeCrianca = $_POST["txtNomeCrianca"];
    $idade = $_POST["txtIdade"];
    $mensagem = $_POST["txtMensagem"];

    $sql = "INSERT INTO pergunta(nome_pais, email, nome_crianca, idade, mensagem) ";
    $sql .= "VALUES('$nomePais','$email','$nomeCrianca','$idade','$mensagem') ";

    if (executarComando($sql) == true)
    {
?>  

<h1 class="alert alert-success">Pergunta enviada com sucesso!</h1>

<?php 
    }

    else 
    {
?>

    <h2 class="alert alert-danger">Não foi possível enviar sua dúvida no momento</h2>

<?php 
}
?>

<a href="index.php">
    <button type="button" class="btn btn-primary">Voltar</button>
</a>

</body>
</html>