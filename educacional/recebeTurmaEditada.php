<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$status = $_POST['status'];


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('UPDATE turma set nome_turma = :nome, status = :status WHERE id = :id');
         $stmt->execute(array(
           ':nome' => $nome,
           ':status' => $status,
           ':id' => $id
        ));


 $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
Turma editada com sucesso!
</div>';

       
    
  
 header("Location: listagemTurmas.php");
