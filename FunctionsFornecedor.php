<?php
$db = mysqli_connect("localhost","root","", "db_Adler");

$record_nome = $_POST['InputNomeEmpresa'];
$record_Endereco = $_POST['InputEndereco'];
$record_CNPJ = $_POST['InputCNPJ'];
$record_telefone = $_POST['InputTelefone'];

if ($_GET['escolha'] == "inserir") {
    $record = mysqli_query($db,"INSERT INTO tb_fornecedor(nome_empresa, endereco_empresa, CNPJ, telefone)
                                       value ('$record_nome','$record_Endereco','$record_CNPJ',
                                              '$record_telefone')");
    header('Location:VisualizarFornecedor.php');
}

if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"UPDATE tb_fornecedor SET nome_empresa='$record_nome',endereco_empresa='$record_Endereco',
                                      CNPJ='$record_CNPJ',telefone='$record_telefone' WHERE id='$id'");
    header('Location:VisualizarFornecedor.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_fornecedor WHERE id='$id'");
    header('Location:VisualizarFornecedor.php');
}

?>
