<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <style>
        .suainsgnia { box-shadow : 0px 0px 17px 0px rgba(48, 50, 50, 1); }
    </style>

</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Física</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="CadastrarEmprestimo.php">Empréstimos</a></li>
                        <li><a href="CadastrarPecas.php">Pecas</a></li>
                        <li><a href="CadastroUsuario.php">Usuários</a></li>
                        <li><a href="CadastrarFornecedor.php">Fornecedor</a></li>
                    </ul>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visualizar <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="VisualizarEmprestimos.php">Empréstimos</a></li>
                            <li><a href="VisualizarPecas.php">Pecas</a></li>
                            <li><a href="VisualizarUsuarios.php">Usuários</a></li>
                            <li><a href="VisualizarFornecedor.php">Fornecedor</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" style="margin-top: 15px; color: #5e5e5e">
                    Seja bem vindo <strong><?php echo $_SESSION['nome'] ?></strong>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="span12" style="text-align: center">
            <h1><?php echo $_SESSION['nome'] ?></h1>
            <div class="tab-pane col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Dados Pessoais</a></li>
                    <li><a href="#tab2" data-toggle="tab">Dados de Segurança</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                        <p style="text-align: justify">
                            <strong>Nome : </strong><?php echo $_SESSION['nome']; ?> <br>
                            <strong>Data de Nascimento : </strong><?php echo $_SESSION['dataNascimento'];?> <br>
                            <strong>Telefone : </strong><?php echo $_SESSION['telefone']; ?> <br>
                            <strong>Universidade : </strong><?php echo $_SESSION['Instituicao'] ?> <br><br>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <p style="text-align: justify">
                            <strong>Email : </strong><?php echo $_SESSION['email']; ?> <br>
                            <strong>Senha: </strong><?php echo $_SESSION['password'];?> <br>
                            <strong>CPF: </strong><?php echo $_SESSION['cpf'];?> <br><br><br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <a class="btn btn-warning" href="AlterarUsuario.php?id=<?php echo $_SESSION['id']; ?>">Alterar Dados</a>
                <a class="btn btn-danger" href="Functions.php?escolha=remover&id="<?php echo $_SESSION['id'];?>>Excluir Conta</a>
            </div>
        </div>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>