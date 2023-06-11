<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');
  require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');

$professor_id_turma = $_POST['professor_id_turma'];
$nome_turma = $_POST['nome_turma'];


    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare('INSERT INTO turma (id, nome_turma, professor_id_turma, escola_id_turma) VALUES (NULL, :nome_turma, :professor_id, :escola_id )');
    $stmt->execute(array(
                   ':nome_turma' => $nome_turma,
                   ':professor_id' =>$professor_id_turma,
                   ':escola_id' => $_SESSION['escola']->id
                ));        
       
          header("Location: ../educacional/cadastroTurma.php");
          $_SESSION['msg'] = '<div class="alert alert-success" role="alert">
          Sucesso, Turma cadastrada !
        </div>';
          

?>