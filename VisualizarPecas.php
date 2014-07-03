<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/html">
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
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Pecas Cadastradas </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","","db_Adler");
            $results = mysqli_query($connect,"SELECT nomePeca, tipoPeca, quantidadePeca, id FROM tb_pecas ORDER BY nomePeca");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_nomePeca = $linhas['nomePeca'];
                $results_tipoPeca = $linhas['tipoPeca'];
                $results_quantidadePeca = $linhas['quantidadePeca'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-4 col-md-3">
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" class="media-object img-rounded">
                        <div class="caption"style="text-align: center">
                            <h3> <?php echo $results_nomePeca ?></h3>
                            <p><strong> <?php echo $results_tipoPeca ?></strong></p>
                            <p><strong <? echo $results_quantidadePeca ?></strong></p>
                            <p><a href="AlterarPecas.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning" role="button">
                                    Alterar</a>
                                <a href="FunctionPecas.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger" role="button">
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