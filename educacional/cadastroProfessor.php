
<?php
    session_start();
    require_once ('../models/conexao/conexao.php'); 
    require_once('../models/restrito/VerificarSeLogadoCoordenadora1.php');
    require_once("../components/head.php");
    require_once("../model/funcoes.php");

    if(isset($_POST['usu'])){
        cria_usu_professor($_POST['usu'], $_POST['email'], $_POST['login'], $_POST['nome'], $_POST['senha']);
    }
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
                                            <li><a href="../educacional/">Home</a> <span class="bread-slash">/</span>
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
                            
                            <center><h2>Cadastro de Professor(a)</h2></center>
                            <br>
			 <div class="container">
                    <form action='' method='post'>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Digite o Usuário do Professor(a):</label>
                            <input class="form-control" type="text" name="usu" id="usu"  aria-describedby="emailHelp" placeholder="Usuário do Professor" required><br>
                        </div>                                

                        <div class="form-group">
                            <label for="exampleInputEmail1">Digite o email do Professor(a):</label>
                            <input class="form-control" type="email" name="email" id="email"  aria-describedby="emailHelp" placeholder="Email do Professor" required><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Digite o login do Professor(a):</label>
                            <input class="form-control" type="text" name="login" id="login"  aria-describedby="emailHelp" placeholder="Login do Professor" required><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Digite a senha do Professor(a):</label>
                            <input class="form-control" type="password" name="senha" id="senha"  aria-describedby="emailHelp" placeholder="Senha do Professor" required><br>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome do Professor(a):</label>
                            <input class="form-control" type="text" name="nome" id="nome"  aria-describedby="emailHelp" placeholder="Nome do Professor" required><br>
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


 


