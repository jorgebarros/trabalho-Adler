<?php
session_start();
$db = mysqli_connect("localhost","root","", "db_Adler");
if ($_GET['escolha'] != remover) {
    $record_nome = $_POST['InputNome'];
    $record_dataNascimento = $_POST['InputDataDeNascimento'];
    $record_Cpf = $_POST['InputCpf'];
    $record_Endereco = $_POST['InputEndereco'];
    $record_Telefone = $_POST['InputTelefone'];
    $record_instituicao = $_POST['InputInstituicao'];
    $record_email = $_POST['InputEmail'];
    $record_senha = $_POST['InputSenha'];
}
if ($_GET['escolha'] == "inserir") {

    $record = mysqli_query($db,"INSERT INTO tb_usuario (nome, dataNascimento, cpf, endereco, telefone, Instituicao, email, senha)
    value ('$record_nome','$record_dataNascimento', '$record_Cpf', '$record_Endereco', '$record_Telefone', '$record_instituicao',
    '$record_email', '$record_senha')");
    header('Location:VisualizarUsuarios.php');
}

if ($_GET['escolha'] == "alterar") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"UPDATE tb_usuario SET nome='$record_nome',dataNascimento='$record_dataNascimento',
                                      cpf='$record_Cpf',endereco='$record_Endereco',telefone='$record_Telefone',Instituicao='$record_instituicao',
                                      email='$record_email',senha='$record_senha' WHERE id='$id'");

    $_SESSION['nome'] = $record_nome;
    $_SESSION['dataNascimento'] = $record_dataNascimento;
    $_SESSION['cpf'] = $record_Cpf;
    $_SESSION['endereco'] = $record_Endereco;
    $_SESSION['telefone'] = $record_Telefone;
    $_SESSION['Instituicao'] = $record_instituicao;
    $_SESSION['email'] = $record_email;
    $_SESSION['senha'] = $record_senha;

    header('Location:VisualizarUsuarios.php');
}

if ($_GET['escolha'] == "remover") {
    $id = $_GET['id'];
    $results = mysqli_query($db,"DELETE FROM tb_usuario WHERE id='$id'");
    header('Location:LogIn.php');
}

?>