
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
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
                                            <li><a href="../professor/">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Notas</span>
                                            
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
                        

                            <!-- <center><h2>Lançamento de notas</h2></center>
                            <br>
                            <form action='escolheraluno.php' method='post'>
                            <center><div style='width: 1200px;'>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Escolha a atividade que você quer dar nota:</label>
                            <select  class="form-control" name="atividade" id="atividade" aria-describedby="emailHelp" placeholder="Enter email">
                            <?php
                            // $sql = $con->prepare("SELECT * from atividade");
                            // $sql->execute();
                            // $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                            // foreach ($rows as $row){
                            //     echo "<option value='".$row->id."'>".$row->nome."</option>";
                            // }
                            ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Continuar</button>
                        </form>
                            </div>
                                </div> -->
                                </table>
                                <br><br>
                        <center><h2>Edição de notas</h2></center>
                        <br>
                        <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg']; unset($_SESSION['msg']);}?>
                        <form action='escolheralunomod.php' method='post'>
                        <center><div style='width: 1200px;'>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Escolha a atividade que você quer modificar a nota:</label>
                        <select  class="form-control" name="atividademod" id="atividademod" aria-describedby="emailHelp" placeholder="Enter email">
                        <?php
                        $sql = $con->prepare("SELECT * from atividade");
                        $sql->execute();
                        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                        foreach ($rows as $row){
                            echo "<option value='".$row->id."'>".$row->nome."</option>";
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

                            <br>
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