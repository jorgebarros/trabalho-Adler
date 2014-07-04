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
			margin-top:20px;
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
    <div class="centro">
        <form role="form" method="post" action="FunctionsFornecedor.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNomeEmpresa">Empresa</label>
                    <input type="text" class="form-control" id="InputNomeEmpresa" name="InputNomeEmpresa" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="ImputEndereco">Endereco</label>
                    <input type="text" class="form-control" id="ImputEndereco" name="InputEndereco">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCNPJ">CNPJ</label>
                    <input type="text" class="form-control" id="InputCNPJ" name="InputCNPJ">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="InputTelefone" name="InputTelefone">
                    <input type="submit" class="btn btn-primary btn-block col-md-10" style="margin-top: 30px;">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>