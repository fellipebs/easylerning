<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
<?php
  session_start();
  header ('Content-type: text/html; charset=utf-8');
  require_once('../models/restrito/VerificarSeLogadoAluno1.php');
  require_once ('../models/conexao/conexao.php');
  $sql= $con->prepare("SELECT * FROM atividade a 
                       INNER JOIN atividade_aluno atv ON atividade_id = a.id 
                       INNER JOIN aluno ON atv.aluno_id = aluno.id
                       WHERE atv.status = 'pendente' and aluno.usuario_id = ?");
  $sql->execute(array($_SESSION['usuario']->id));
  $rows = $sql->fetchAll(PDO::FETCH_CLASS);
  require_once("../components/head.php");
?>
</head>
<body>
    <?php require_once("../components/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcome-heading">
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">
                                    <li><a href="../aluno/index.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Aluno</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="contacts-area mg-b-15">
        <div class="container-fluid">
           <center><h1>Atividades a serem realizadas</h1></center>
            <div class="row">
                <?php foreach ($rows as $row): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo $row->arquivo?>">
                        <div class="student-inner-std res-mg-b-30">
                            <div class="student-img">
                                <img src="<?php echo $row->imagem?>" alt="" />
                            </div>
                            <div class="student-dtl">
                                <h2><?php echo $row->nome?></h2>
                                <p class="dp"><?php echo $row->descricao?></p>
                            </div>
                        </div>
                    </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php require_once("../components/footer.php");?>
    <?php require_once("../components/js.php");?>
</body>

</html>