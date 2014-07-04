<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_Titulo = $_POST['InputTitulo'];
$record_Noticia = $_POST['InputNoticia'];


if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_noticias(Titulo, Noticia)
                                       value ('$record_Titulo','$record_Noticia')");
    header('Location:Forum.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    echo $record_email;
    $results = mysqli_query($db,"UPDATE tb_noticias SET Titulo='$record_Titulo', Noticia='$record_Noticia' WHERE id='$id'");
    header('Location:Forum.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_noticias WHERE id='$id'");
    header('Location:Forum.php');
}

?>
