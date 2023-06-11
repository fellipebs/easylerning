
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
    require_once("../components/head.php");

date_default_timezone_set('America/Sao_Paulo');
$date = date('Y-m-d H:i');

?>
<meta charset="UTF-8">
<style>

data {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
data {
    margin: .4rem 0;
}


</style>
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
                                            <li><a href="../professor">Home</a> <span class="bread-slash">/</span>
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
                            <center><h2>Lançamento de atividades</h2></center>
                            <br>
                            <form action='../models/processa_cad_atividade.php' method='post'>
                            <center><div style='width: 1200px;'>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Escolha a atividade para ser lançada:</label>
                            <select  class="form-control" name="atividade" id="atividade" aria-describedby="emailHelp" placeholder="Enter email" required> 
                            <?php
                            $sql = $con->prepare("SELECT id, nome from atividade WHERE id IN (1,2,3,8,5) ORDER BY nome");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){
                                echo "<option value='".$row->id."'>".$row->nome."</option>";
                            }
                            ?>
                            </select>
                        </div>
				    
                        <div class="form-group">
                            <label for="exampleInputEmai2">Selecione a Turma:</label>
                            <select multiple="multiple" class="form-control" name="turma[]" id="turma" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <?php
                            $sql = $con->prepare("SELECT id, nome_turma from turma where status = 1 order by nome_turma");
                            $sql->execute();
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            foreach ($rows as $row){  
                                echo "<option value='".$row->id."'>".$row->nome_turma."</option>";
                            }
                            ?>
                            </select>
                        </div>
			

                        <button type="submit" class="btn btn-primary">Continuar</button>

                        </form>
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


 


