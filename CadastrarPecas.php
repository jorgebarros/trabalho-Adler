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
    <div class="centro">
        <form role="form" method="post" action="FunctionPecas.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNomePeca">Nome da peça</label>
                    <input type="text" class="form-control" id="InputNomePeca" name="InputNomePeca" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownTipoPeca">Tipo da Peça</label>
                    <select id="DropDownTipoPeca" class="img-rounded" name="DropDownTipoPeca" style="width: 360px; display: block; padding: 7px">
                        <option = "0">Tipo da Peça</option>
                        <option = "Permanente">Permanente</option>
                        <option = "Consumo">Consumo</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownStatusPeca">Status da Peça</label>
                    <select id="DropDownStatusPeca" class="img-rounded" name="DropDownStatusPeca" style="width: 360px; display: block; padding: 7px">
                        <option = "0">Status da Peça</option>
                        <option = "Disponivel">Disponível</option>
                        <option = "Indisponivel">Indisponível</option>
                        <option = "Emprestada">Emprestada</option>
                    </select>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="">Localização</label>
                    <input type="text" class="form-control" id="InputLaboratorio" name="InputLaboratorio" value="Laboratório">
                    <input type="text" class="form-control" id="InputArmario" name="InputArmario" style="margin-top: 10px" value="Armário">
                    <input type="text" class="form-control" id="InputPrateleira" name="InputPrateleira" style="margin-top: 10px" value="Prateleira">
                    <input type="text" class="form-control" id="InputGaveta" name="InputGaveta" style="margin-top: 10px" value="Gaveta">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputQuantidade">Quantidade Disponível no Sistema</label>
                    <input type="text" class="form-control" id="InputQuantidade" name="InputQuantidade">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label form="DropDownEstado">Estado de Conservação</label>
                    <select id="DropDownEstado" class="img-rounded" name="DropDownEstado" style="width: 360px; display: block; padding: 7px">
                        <option = "0">Estado da peça</option>
                        <option = "Bom">Bom</option>
                        <option = "Medio">Médio</option>
                        <option = "Ruim">Ruim</option>
                        <input type="submit" class="btn btn-primary btn-block" style="margin-top: 15px">
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