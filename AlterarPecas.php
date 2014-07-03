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
    $db = $connect = mysqli_connect("localhost","root","","db_dler");
    $results = mysqli_query($connect, "SELECT * FROM tb_pecas WHERE id='$id'");
    while ($linha = mysqli_fetch_array($results)) {
        $alterar_id = $linha['id'];
        $alterar_nomePeca = $linha['nomePeca'];
        $alterar_tipoPeca = $linha['tipoPeca'];
        $alterar_statusPeca = $linha['statusPeca'];
        $alterar_laboratorio = $linha['lclLaboratorio'];
        $alterar_armario = $linha['lclArmario'];
        $alterar_gaveta = $linha['lclGaveta'];
        $alterar_prateleira = $linha['lclPrateleira'];
        $alterar_quantidadePecas = $linha['quantidadePeca'];
        $alterar_estadoPeca = $linha['estadoPeca'];

    }

    ?>
    <div class="centro">
        <form role="form" method="post" action="FunctionPecas.php?escolha=alterar">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNomePeca">Nome da peça</label>
                    <input type="text" class="form-control" id="InputNomePeca" name="InputNomePeca" value="<?php echo $alterar_nomePeca ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownTipoPeca">Tipo da Peça</label>
                    <select id="DropDownTipoPeca" class="img-rounded" name="DropDownTipoPeca" style="width: 360px; display: block; padding: 7px">
                        <option = "<?php echo $alterar_tipoPeca?>"> <?php echo $alterar_tipoPeca ?> </option>
                        <option = "Permanente">Permanente</option>
                        <option = "Consumo">Consumo</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownStatusPeca">Status da Peça</label>
                    <select id="DropDownStatusPeca" class="img-rounded" name="DropDownStatusPeca" style="width: 360px; display: block; padding: 7px">
                        <option = "<?php echo $alterar_statusPeca ?>"><?php echo $alterar_statusPeca ?></option>
                        <option = "Disponivel">Disponível</option>
                        <option = "Indisponivel">Indisponível</option>
                        <option = "Emprestada">Emprestada</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="">Localização</label>
                    <input type="text" class="form-control" id="InputLaboratorio" name="InputLaboratorio" value="<?php echo $alterar_lclLaboratorio ?>">
                    <input type="text" class="form-control" id="InputArmario" name="InputArmario" style="margin-top: 10px" value="<?php echo $alterar_lclArmario ?>">
                    <input type="text" class="form-control" id="InputPrateleira" name="InputPrateleira" style="margin-top: 10px" value="<?php echo $alterar_lclPrateleira ?>">
                    <input type="text" class="form-control" id="InputGaveta" name="InputGaveta" style="margin-top: 10px" value="<?php echo $alterar_lclGaveta ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputQuantidade">Quantidade Disponível no Sistema</label>
                    <input type="text" class="form-control" id="InputQuantidade" name="InputQuantidade" value="<?php echo $alterar_quantidadePecas ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownEstado">Estado de Conservação</label>
                    <select id="DropDownEstado" class="img-rounded" name="DropDownEstado" style="width: 360px; display: block; padding: 7px">
                        <option = "<?php echo $alterar_estadoPeca ?>"><?php echo $alterar_estadoPeca ?></option>
                        <option = "Bom">Bom</option>
                        <option = "Medio">Médio</option>
                        <option = "Ruim">Emprestada</option>
                        <input type="submit" class="btn btn-warning btn-block" style="margin-top: 15px">
                    </select>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>