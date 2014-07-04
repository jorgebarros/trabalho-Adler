<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_NomeResponsavel = $_POST['InputNomeResponsavel'];
$record_DataRetirada = $_POST['InputDataRetirada'];
$record_DataEntrega = $_POST['InputDataEntrega'];
$record_Motivo = $_POST['InputMotivo'];


if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_emprestimos(NomeResponsavel, DataRetirada, DataEntrega, Motivo)
                                       value ('$record_NomeResponsavel','$record_DataRetirada','$record_DataEntrega',
                                              '$record_Motivo')");
    header('Location:VisualizarEmprestimos.php');
}
if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    echo $record_email;
    $results = mysqli_query($db,"UPDATE tb_emprestimos SET nomeResponsavel='$record_NomeResponsavel',DataRetirada='$record_DataRetirada',
                                      DataEntrega='$record_DataEntrega',Motivo='$record_Motivo' WHERE id='$id'");
    header('Location:VisualizarEmprestimos.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_emprestimos WHERE id='$id'");
    header('Location:VisualizarEmprestimos.php');
}

?>
