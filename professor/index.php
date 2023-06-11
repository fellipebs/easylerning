
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT id,nome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel FROM aluno; ");
    $sql->execute();
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);
    require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
    require_once("../components/head.php");

?>
<body>
    <?php require_once("../components/menus.php");?>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                      
                                  
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
                        <center><p><h3><strong><font face="verdana" color="">Seja bem-vindo novamente: <?php echo $_SESSION['usuario']->usuario;?> !</font></strong></h3></p></center>
                        <br><br>
                        <div class='row'>
                            <div class='col-sm-4'><center><label>Lançar uma notificação</label><br><a href='notificacao.php'><img src='../assets/images/notificacao.png'></a></center></div>
                            <div class='col-sm-4'><center><label>Ir para os gráficos</label><br><a href='listagemNotas.php'><img src='../assets/images/graficicon.png'></a></center></div>             
                            <div class='col-sm-4'><center><label>Editar informações de sua conta</label><br><a href='editar.php'><img src='../assets/images/gear.png'></a></center></div>                       
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