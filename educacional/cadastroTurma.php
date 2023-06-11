
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
    require_once("../components/head.php");

  
?>
<meta charset="UTF-8">
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
                                        <div class="breadcome-heading">
                                           
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="../educacional/index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Atividades</span>
                                            
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
                          
                            <div class="asset-inner">
                         
                           
                            <?php 
                            $row = $sql->fetchObject();
                            if(isset($_SESSION['msg2'])){
                                echo $_SESSION['msg2'];
                                unset($_SESSION['msg2']);
                            }
                             elseif(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                   
                                }             
                            
                            ?> 
                           
                            <div class"container">
                            <center><h2>Cadastro de Turmas</h2></center>
                            <br>
                            <form action='../models/processa_cad_turma.php' method='post'>
                            
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome da Turma:</label>
                            <input class="form-control" type="text" name="nome_turma" id="nome_turma"  aria-describedby="emailHelp" placeholder="Nome da Turma"><br>
                        </div>
                            
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Selecione o Professor(a):</label>
                            <select class="form-control" name="professor_id_turma" id="professor_id_turma" aria-describedby="emailHelp" placeholder="Selecione o Professor">
                            <?php
                            
                            $sql = $con->prepare("SELECT * from professor where escola_id = ?");
                            $sql->execute(array($_SESSION['escola']->id));
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->id."'>".$row->nome."</option>";
                            }
                            ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                       

                        </form>
				</div>
                            </div>
                                </div>
                                </table>
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


 


