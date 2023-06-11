<?php
session_start();
//require_once('../models/restrito/VerificarSeLogadoAluno1.php');
    require_once ('../models/conexao/conexao.php'); 
    require_once("../components/head.php");

    require_once ('../models/conexao/conexao.php'); 
    $sql= $con->prepare("SELECT * FROM escola where usuario_id = ?;");
    $sql->execute(array($_SESSION['usuario']->id));
    $rows = $sql->fetchAll(PDO::FETCH_CLASS);

?>

<body>
    <?php require_once("../components/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              
                           
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Edite Informações básicas da Escola</a></li>
                            <li><a href="#reviews"> Edite Informações da conta</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form method="post" action="processa_edit_escola.php" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                    <div class="row">
                                                    <?php
                                                    if(isset($_SESSION['msg'])){
                                                          echo $_SESSION['msg'];
                                                          unset($_SESSION['msg']);
                                                         }
                                                    ?>      
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <?php foreach($rows as $aux){ ?>
                                                           <input type='hidden' value="<?= $aux->id ?>" name='id'>
                                                            <div class="form-group">
                                                            <label>Nome:</label>
                                                                <input name="nome" type="text" class="form-control"  placeholder="Nome" value="<?= $aux->nome ?>">
                                                            </div>
                                                            <label>CNPJ:</label>
                                                            <div class="form-group">
                                                                <input name="cnpj" type="text" class="form-control" placeholder="Sobrenome" value="<?= $aux->cnpj ?>">
                                                            </div>
                                                            <label>Endereço:</label>
                                                            <div class="form-group">
                                                                <input name="endereco" type="text" class="form-control" placeholder="Sobrenome" value="<?= $aux->endereco ?>">
                                                            </div>
                                                            
                                                            <?php } ?>
                                                           
                                                        </div>
                                                    </div>
                                                                <button type="submit"
                                                                    class="btn btn-primary waves-effect waves-light">Atualizar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="reviews">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="devit-card-custom">
                                                    <form method="post" action="../models/alterar2.php"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    id="demo1-upload">
                                                        <div class="form-group">
                                                        <label>Email</label>
                                                            <input type="text" class="form-control" placeholder="Email" name="email"
                                                                value="<?php echo $_SESSION['usuario']->email ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Login</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Login" value="<?php echo $_SESSION['usuario']->login ?>" name="usuario">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Senha antiga</label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Senha Antiga" name="senhaAntiga">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Nova Senha</label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Nova Senha" name="novaSenha">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Confirme sua nova senha</label>
                                                            <input type="password" class="form-control"
                                                                placeholder="Confirmar Senha" name="comfirmarSenha">
                                                        </div>
                                                      
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">Atualizar</button>
                                                        </form>                                                   
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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