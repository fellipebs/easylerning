<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once ('../models/conexao/conexao.php');


  $email = $_POST['email'];
  
  
  $stmt = $pdo->prepare('INSERT INTO quero_conhecer(email) VALUES (:email)');
  $stmt->execute(array(
                 ':email' => $email
              ));   
    $_SESSION['msg'] = "<script>alert('Os seus dados foram salvos em nosso banco de dados!')</script>";





  header("Location: ../index.php");









  ?>