<?php
session_start();
require_once('conexao/conexao.php');
if (isset($_FILES["escolher"])) {
    $ext = strtolower(substr($_FILES['escolher']['name'], -4)); //Pegando extensão do arquivo
    $dir = '../assets/images/user/'; //Diretório para uploads 
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    move_uploaded_file($_FILES['escolher']['tmp_name'], $dir . $new_name); //Fazer upload do arquivo
    $_SESSION['foto'] = $new_name;
}
if (isset($_POST["senhaAntiga"]) && isset($_POST["novaSenha"]) && isset($_POST["confirmarSenha"]) && $_POST["novaSenha"] == $_POST["confirmarSenha"]) {
    
    $sql = $con->prepare("UPDATE usuarios SET senha=?, email=? WHERE id = ?");
    $sql->execute(array(md5($_POST['novaSenha']), $_POST['email'], $_SESSION['usuario']->id));

    if(isset($_POST["sobrenome"])){
        $sql = $con->prepare("UPDATE professor SET nome=?, sobrenome=? WHERE usuario_id = ?");
        $sql->execute(array($_POST['nome'], $_POST['sobrenome'], $_SESSION['usuario']->id));
    }

    $sql = $con->prepare("SELECT * FROM usuarios where id = ?");
    $sql->execute(array($_SESSION['usuario']->id));
    $row = $sql->fetchObject();
    if ($row) {
        $_SESSION['usuario'] = $row;
    }
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">Sucesso, Dados Alterados com Sucesso!</div>';
} else {
    $_SESSION['msg'] = '<div class="alert alert-danger" role="alert">Erro, As senhas não coincidem!</div>';
}
if (isset($_POST["usuario"])) {
    $sql = $con->prepare("UPDATE usuarios SET login  = ? WHERE id = ?");
    $sql->execute(array($_POST['usuario'], $_SESSION['usuario']->id));
}

if(isset($_POST["tpUsu"]) == "alu")
    header("location: ../aluno/editar.php");
else
    header("location: ../professor/editar.php");
