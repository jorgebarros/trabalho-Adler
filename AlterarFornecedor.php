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
    $results = mysqli_query($db, "SELECT * FROM tb_fornecedor WHERE id='$id'");
    while ($linha = mysqli_fetch_array($results)) {
        $alterar_id = $linha['id'];
        $alterar_nome = $linha['nome_empresa'];
        $alterar_endereco = $linha['endereco_empresa'];
        $alterar_CNPJ = $linha['CNPJ'];
        $alterar_telefone = $linha['telefone'];
    }
    ?>

    <div class="centro">
        <form role="form" method="post" action="FunctionsFornecedor.php?escolha=alterar&id=<?php echo $alterar_id?>">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" id="InputNome" name="InputNomeEmpresa" value="<?php echo $alterar_nome ?>" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputEndereco">Endereco</label>
                    <input type="text" class="form-control" id="InputEndereco" name="InputEndereco" value="<?php echo $alterar_endereco ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputCNPJ">CNPJ</label>
                    <input type="text" class="form-control" id="InputCNPJ" name="InputCNPJ" value="<?php echo $alterar_CNPJ ?>">
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputTelefone">Telefone</label>
                    <input type="tel" class="form-control" id="InputTelefone" name="InputTelefone" value="<?php echo $alterar_telefone ?>">
                    <input type="submit" class="btn btn-warning btn-block col-md-11" style="margin-top: 30px" value="Alterar"></div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>