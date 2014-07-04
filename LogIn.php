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

        .campo2 {
            text-align: center;
            width: auto;
            margin-top: -19px;
            box-shadow: 5px 5px 5px 5px #888888;
        }

        .centralizarForm {
            width: 100%;
            margin: 0 auto;
            background-color: #080808;
        }

        .btn-border {
            box-shadow: 1px 1px 15px #888888;
        }
    </style>

</head>
<body style="background-color: #f3f3f3">
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <form class="form-inline" role="form" method="post" style="margin-top: 8px" action="VerificarUsuario.php?funcao=logar">
                <strong style="color: #ffffff;margin-right: 25px">Acesse nosso WebSite</strong>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail2"  placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
            </form>
        </ul>
    </div>
    </div>
    </div>
</nav>
</div>
<div class="center-block">
    <div class="campo2 col-md-offset-3 col-md-6 jumbotron img-rounded" style="margin-top: 5px">

        <?php
        if (isset($_GET['falha'])) {
            if ($_GET['falha']=="sim"){
                ?>
                <p><h2>Login inválido, você possui uma conta? <br> Caso não possua cadastre-se aqui, é fácil.</h2></p>
            <?php
            }
        }
        else {
            ?>
            <p><h2>Cadastrar-se, é fácil !</h2></p>
        <?php
        }
        ?>
        <form role="form" method="post" action="VerificarUsuario.php?funcao=cadastrar" class="centralizarForm">
            <div class="row col-md-12" style="margin-left: -1px; margin-top: 15px;">
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" id="InputEmail" name ="email" value="email">
                </div>
            </div>
            <div class="row col-md-12"  style="margin: 0 auto;">
                <div class="form-group col-md-12">
                    <input type="password" class="form-control" id="InputSenha" name="password" value="password">
                    <input type="submit" class="btn btn-block btn-border col-md-11" style="margin-top: 15px">
                </div>
            </div>
        </form>
    </div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>