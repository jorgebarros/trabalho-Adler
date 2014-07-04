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
			float:left;
        }
    </style>

</head>
<body>
<?php
include "Topo.php";
?>
</br></br>
    <div class="centro">
        <form role="form" method="post" action="Functions.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" id="InputNome" name="InputNome" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputDataDeNascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" id="InputDataDeNascimento" name="InputDataDeNascimento">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCpf">CPF</label>
                    <input type="text" class="form-control" id="InputCpf" name="InputCpf">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputEndereco">Endereço</label>
                    <input type="text" class="form-control" id="InputEndereco" name="InputEndereco">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputTelefone">Telefone</label>
                    <input type="tel" class="form-control" id="InputTelefone" name="InputTelefone">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputInstituicao">Nome da Instituição</label>
                    <input type="text" class="form-control" id="InputInstituicao" name="InputInstituicao">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputEmail">Email</label>
                    <input type="email" class="form-control" id="InputEmail" name="InputEmail">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputSenha">Senha</label>
                    <input type="password" class="form-control" id="InputSenha" name="InputSenha">
                    <input type="submit" class="btn btn-primary btn-block" style="margin-top: 30px">
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>