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
.texto{
	border:2px;
	overflow:auto;
	width:900px;
}
</style>
</head>
<body>
<?php
include "Topo.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" style="text-align: center;">
                    <h1> Fórum </h1>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $connect = mysqli_connect("localhost","root","","db_Adler");
            $results = mysqli_query($connect,"SELECT * FROM tb_noticias ORDER BY id");
            while ($linhas = mysqli_fetch_array($results)) {
                $results_Titulo = $linhas['Titulo'];
                $results_Noticia = $linhas['Noticia'];
                $results_id = $linhas['id'];
                ?>
                <div class="col-sm-20 col-md-15">
                    <div class="thumbnail">
                        <div class="caption"style="text-align: center">
                            <p><strong><h3><?php echo $results_Titulo ?></strong></p></h3>
                            <center><div class="texto"><strong> <?php echo $results_Noticia ?></strong></div></center>
                            <p><a href="AlterarNoticia.php?escolha=alterar&id=<?php echo $results_id ?>"class="btn btn-warning" role="button">
                                    Alterar</a>
                                <a href="FunctionsForum.php?escolha=remover&id=<?php echo $results_id ?>" class="btn btn-danger" role="button">
                                    Remover</a></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    
    <center><a href="InserirNoticia.php"class="btn btn-warning" role="button" style="font-size:36px; margin:10px;">
                                    Inserir Notícia</a></center>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>