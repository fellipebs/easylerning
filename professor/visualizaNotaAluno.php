
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
                                   Notas do aluno escolhido
                                </h2>  
                                </center>
                               
                                    <?php 
                                      $sql = $con->prepare("select n.valor_atividade, n.nota, a.nome, atv.nome as nomeAtv from nota n 
                                      inner join aluno a inner join atividade atv on n.aluno_id = a.id and atv.id = n.atividade_id where n.aluno_id = ?;");
                                      $sql->execute(array($_POST['idRendimento']));
                                      $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                      if(empty($rows)){
                                        $_SESSION['msg'] = '<div class="alert alert-warning" role="alert">
                                        Ainda não foram encontradas notas para o respectivo aluno!
                                        </div>';
                                        echo '<script>window.location.href = "listagemNotas.php";</script>';
                                        
                                      }else{
                                        echo '<div class="container">
                                        <table class="table">
                                        <tr>
                                            <td><strong>Nome do aluno</strong></td>
                                            <td><strong>Valor da atividade</strong></td>
                                            <td><strong>Nota do aluno<strong></td>
                                            <td><strong>Nome da atividade<strong></td>
                                        </tr>';
                                        foreach ($rows as $atv){
                                            echo "<tr>";
                                            echo "<td>$atv->nome</td>";
                                            echo "<td>$atv->valor_atividade</td>";
                                            echo "<td>$atv->nota</td>"; 
                                            echo "<td>$atv->nomeAtv</td>";           
                                            echo "</tr>";
                                          }
                                          echo '</table>
                                            </div>';
                                      }
                                      
                                    ?>
                                    </select>

                            </div>
                        </div>
                            <div class="custom-pagination">
	        							<ul class="pagination">
									<!-- <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="../#">1</a></li>
									<li class="page-item"><a class="page-link" href="../#">2</a></li>
									<li class="page-item"><a class="page-link" href="../#">3</a></li>
									<li class="page-item"><a class="page-link" href="../#">Next</a></li> -->
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