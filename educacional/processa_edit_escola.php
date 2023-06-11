<?php
session_start();
header ('Content-type: text/html; charset=utf-8');
require_once ('../models/conexao/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj =  $_POST['cnpj'];
$endereco = $_POST['endereco'];

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('UPDATE escola set nome = :nome, cnpj =:cnpj, endereco = :endereco WHERE id = :id');
         $stmt->execute(array(
           ':nome' => $nome,
           ':cnpj' => $cnpj,
           ':endereco' => $endereco,
           ':id' => $id
        ));


$_SESSION['msg'] = '<div class="alert alert-success" role="alert">
Escola editada com sucesso!
</div>';

       
    
  
 header("Location: editar.php");

?>