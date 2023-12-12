<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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

<h1 class="alert alert-success">Professor <?php echo $nome; ?> Cadastrado com sucesso!</h1>

<?php 
}
else 
{
    echo '<h2>Não foi possível cadastrar o professor nesse momento</h2>';
}
?>

<a href="index.php">
<button class="btn btn-primary w-100 py-3" type="submit">Voltar</button>
</a>

</body>
</html>