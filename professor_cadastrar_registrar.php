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

    $nome = $_POST["txtNomeProfessor"];
    $formacao = $_POST["txtFormacao"];
    $escola = $_POST["txtEscolaAnterior"];
    $experiencia = $_POST["txtExperiencia"];
    $turno = $_POST["txtTurno"];

    $sql = "INSERT INTO professor(nome_professor, formacao, escola_anterior, tempo_experiencia, turno) ";
    $sql .= "VALUES('$nome','$formacao','$escola','$experiencia','$turno') ";

    if (executarComando($sql) == true)
    {
?>  

<h1 class="alert alert-success">Professor <?php echo $nome; ?> cadastrado com sucesso!</h1>

<?php 
    }

    else 
    {
?>

    <h2 class="alert alert-danger">Não foi possível realizar cadastro nesse momento</h2>

<?php 
}
?>

<a href="index.php">
    <button type="button" class="btn btn-primary">Voltar</button>
</a>

</body>
</html>