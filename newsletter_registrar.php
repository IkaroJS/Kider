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

    $email = $_POST["txtEmail"];

    $sql = "INSERT INTO newsletter(email) VALUES ('$email') ";

    if (executarComando($sql) == true)
    {
?>  

<h1 class="alert alert-success">Newsletter assinado com sucesso!</h1>
<h2>Confira seu email diariamente para ficar por dentro de todas as novidades</h2>
<?php 
    }

    else 
    {
?>

    <h2 class="alert alert-danger">Não foi possível assinar o newsletter nesse momento</h2>

<?php 
}
?>

<a href="index.php">
    <button type="button" class="btn btn-primary">Voltar</button>
</a>

</body>
</html>