<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home | Educacional</title>
    <link rel="stylesheet" href="../assets/css/aluno/aluno.css">
    <?php
    session_start();
    require_once ('../models/conexao/conexao.php');
    require_once("../components/head.php");
    $sql = $con->prepare("SELECT * FROM escola WHERE usuario_id_escola = ?");
    $sql->execute(array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['escola'] = $row; 
    }
    ?>
</head>
<body>
    <?php require_once("../components/menus.php");?>
    <div class="container-fluid margem centro">
        <h1>Seja bem vindo <?php echo $_SESSION['escola']->nome;?></h1>
        <a href='relatorios.php'><input type='button' class='btn btn-primary' value='Relatórios'></a>
    </div>
</body>
</html>