<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de professores</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>    
    <?php include "conexao_bd.php"; 
    
    $sql = "SELECT * FROM professor ORDER BY nome_professor";

    $resultado = retornarDados($sql);
    ?>

    
        <div class="row g-3">
            <div class="col-sm-6">
                <div class="form-floating">
                    <h2>Nossos professores</h2>
                    <table>                        
                        <tr>
                            <td>Nome</td>
                            <td>Formação</td>
                            <td>Turno</td>
                            <td>Tempo de experiência</td>
                            <td>Escola anterior</td>
                        </tr>

                        <?php                             
                            while ($linha = mysqli_fetch_assoc($resultado))
                            {
                                $nome = $linha["nome_professor"];
                                $formacao = $linha["formacao"];
                                $turno = $linha["turno"];
                                $experiencia = $linha["tempo_experiencia"];
                                $escola = $linha["escola_anterior"];                            
                        ?>

                        <tr>
                            <td><?php echo $nome; ?></td>
                            <td><?php echo $formacao; ?></td>
                            <td><?php echo $turno; ?></td>
                            <td><?php echo $experiencia; ?></td>
                            <td><?php echo $escola; ?></td>                            
                        </tr>

                        <?php } ?>
                            
                            
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <a href="index.php">
            <button class="btn btn-primary w-100 py-3" type="button">
                Cadastrar
            </button>
        </a>
    </div>
</body>
</html>