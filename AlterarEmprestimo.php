<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style type="text/css">
        .centro {
            height:41.42em;
            left:50%;
            margin-left:-15em;
            position:absolute;
            top:15%;
            width:30em;
        }
    </style>

</head>
<body>
<?php
include "Topo.php";
?>

<div class="container-fluid">

    <?php
    $id = $_GET['id'];
    $db = mysqli_connect("localhost","root","","db_Adler");
    $results = mysqli_query($db, "SELECT * FROM tb_emprestimos WHERE id='$id'");
    while ($linha = mysqli_fetch_array($results)) {
        $alterar_id = $linha['id'];
        $alterar_NomeResponsavel = $linha['NomeResponsavel'];
        $alterar_DataRetirada = $linha['DataRetirada'];
        $alterar_DataEntrega = $linha['DataEntrega'];
        $alterar_Motivo = $linha['Motivo'];
    }
    ?>
    <div class="centro">
        <form role="form" method="post" action="FunctionsEmprestimo.php?escolha=alterar&id= <?php echo $alterar_id?>">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNomeResponsavel">Nome do Responsável</label>
                    <input type="text" class="form-control" id="InputNomeResponsavel" name="InputNomeResponsavel" value="<?php echo $alterar_NomeResponsavel ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataRetirada">Data de Retirada</label>
                    <input type="date" class="form-control" id="InputDataRetirada" name="InputDataRetirada" value="<?php echo $alterar_DataRetirada ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataEntrega">Data de Entrega</label>
                    <input type="date" class="form-control" id="InputDataEntrega" name="InputDataEntrega" value="<?php echo $alterar_DataEntrega ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputMotivo">Motivo</label>
                    <input type="text" class="form-control" id="InputMotivo" name="InputMotivo" value="<?php echo $alterar_Motivo ?>">
                    <input type="submit" class="btn btn-warning btn-block col-md-11" value="Alterar" style="margin-top: 20px;">
                </div>
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>