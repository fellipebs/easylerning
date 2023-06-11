<?php
session_start();
require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
require_once ('../models/conexao/conexao.php'); 
if(isset($_POST['aluno'])){
	$msg = $_POST['msg'];
    $aluno = $_POST['aluno'];
    $usu = $_POST['usu'];
    if(empty($aluno)){
        header("Location: notificacao.php");
    }else{
        
        $professor_id = "";
        $sql= $con->prepare("SELECT id FROM professor WHERE usuario_id = '$usu'");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        foreach ($rows as $row)
            $professor_id = $row->id;

         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id, data, id_enviou) VALUES(:descricao, :aluno_id, NOW(), :id_enviou)');
         $stmt->execute(array(
           ':descricao' => $msg,
           ':aluno_id' => $aluno,
           ':id_enviou' => $professor_id
        ));
    }
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
    Notificação enviada com sucesso!
</div>';
    header("Location: notificacao.php");
}

if(isset($_POST['check'])){
    $teste = $_POST['check'];
    $msg = $_POST['msg'];
    $usu = $_POST['usu'];

    $professor_id = "";
    $sql= $con->prepare("SELECT id FROM professor WHERE usuario_id = '$usu'");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    foreach ($rows as $row)
        $professor_id = $row->id;
    
    $sql = $con->prepare("SELECT * from aluno");
    $sql->execute();

    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    foreach ($rows as $row){
        $aluno = $row->id;
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare('INSERT INTO notificacao (descricao, aluno_id, data, id_enviou) VALUES(:descricao, :aluno_id, NOW(), :id_enviou)');
        $stmt->execute(array(
          ':descricao' => $msg,
          ':aluno_id' => $aluno,
          ':id_enviou' => $professor_id
       ));
    }
    $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
Notificação enviada com sucesso!
</div>';
    header("Location: notificacao.php");
}

?>