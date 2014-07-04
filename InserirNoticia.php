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
        <form role="form" method="post" action="FunctionsForum.php?escolha=inserir">
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputTitulo">Título</label>
                    <input type="text" class="form-control" id="InputTitulo" name="InputTitulo" >
                </div>
            </div>
            <div class="row col-md-12">
                <div class="form-group col-md-12">
                    <label for="InputNoticia">Notícia</label>
                    <textarea input type="text" class="form-control" id="InputNoticia" name="InputNoticia"></textarea>
                    <input type="submit" class="btn btn-primary btn-block col-md-11" style="margin-top: 20px;">
                </div>
            </div>
        </form>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>