<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>
<body>
<?php
include "Topo.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Empréstimos Feitos </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","","db_Adler");
            $results = mysqli_query($connect,"SELECT id, NomeResponsavel, DataRetirada, DataEntrega, Motivo FROM tb_emprestimos ORDER BY NomeResponsavel");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_NomeResponsavel = $linhas['NomeResponsavel'];
                $results_DataRetirada = $linhas['DataRetirada'];
                $results_DataEntrega = $linhas['DataEntrega'];
                $results_Motivo = $linhas['Motivo'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" class="media-object img-rounded">
                        <div class="caption"style="text-align: center">
                            <p><strong><h3><?php echo $results_NomeResponsavel ?></strong></p></h3>
                            <p><strong> Data de Entrega : <?php echo $results_DataEntrega ?></strong></p>
                            <p><strong> <?php echo $results_Motivo ?></strong></p>
                            <p><a href="AlterarEmprestimo.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning" role="button">
                                    Alterar</a>
                                <a href="FunctionsEmprestimo.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger" role="button">
                                    Remover</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>