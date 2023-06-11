
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
    require_once("../components/head.php");
?>



<body>
<script src="js/notificacao.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/listagemNotas.css">
    <?php require_once("../components/menus.php");?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../professor/index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="lancarnotas.php">Editar Notas</a> <span class="bread-slash">/</span>
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
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                          
                            <div class="asset-inner" >
                                <table>
                                <center>
                                <h2>
                                   Escolha uma turma e uma atividade para ver o rendimento dos alunos! 
                                </h2>
                                  
                                <?php if (isset($_SESSION['msg'])) {
                                          echo $_SESSION['msg'];
                                          unset($_SESSION['msg']);
                                }
                                ?>

                                </center>
                                <form action='visualizaNotas.php' method='post'>
                                <label>Turma:</label>
                                        <select class='form-control' name='turmaMedia'>
                                    <?php 
                                      $sql = $con->prepare("select * from turma;");
                                      $sql->execute();
                                      $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                      foreach ($rows as $atv){
                                        echo "<option value=".$atv->id.">".$atv->nome_turma."</option>";  
                                      }
                                    ?>
                                    </select>

                                    <label>Atividade:</label>
                                    <select class='form-control' name='atividadeMedia'>
                                    <?php 
                                      $sql = $con->prepare("select * from atividade where id IN (1,2,3,8,5);");
                                      $sql->execute();
                                      $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                      foreach ($rows as $atv){
                                        echo "<option value=".$atv->id.">".$atv->nome."</option>";  
                                      }
                                    ?>
                                    </select>
                                     <br>
                                    <button class='btn btn-primary'>Visualizar</button>
                                    </form>
                            </div>
                        </div>
                            <div class="custom-pagination">
	        							<ul class="pagination">
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("../components/footer.php");?>
        <?php require_once("../components/js.php");?>
</body>

</html>