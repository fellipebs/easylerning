<?php
session_start();
require_once('../models/restrito/VerificarSeLogadoAluno1.php');
    require_once ('../models/conexao/conexao.php'); 

    require_once("../components/head.php");

    $sql = $con->prepare("SELECT * FROM aluno WHERE usuario_id = ?");
    $sql->execute( array($_SESSION['usuario']->id) );
    $row = $sql->fetchObject();
    if($row){
        $_SESSION['aluno'] = $row; 
    }
?>

<body>
    <?php require_once("../components/menus.php");?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <ul class="breadcome-menu">
                                    <li><a href="../aluno/index.php">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Edição de estudante</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <li class="active"><a href="#description">Informações Básicas</a></li>
                            <li><a href="#reviews"> Edite Informações Básicas</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                                <form action=""
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    id="demo1-upload">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <label>Nome</label>
                                                                <input name="number" type="text" class="form-control"
                                                                    placeholder="Fly Zend" value="<?php echo $_SESSION['aluno']->nome ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Data de nascimento</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="12/10/1993" value="<?php echo date("m/d/Y", strtotime($_SESSION['aluno']->dt_nascimento)); ?>" disabled>
                                                            </div>
                                                            <div class="form-group">
                                                            <label>Responsável</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="1213" value="<?php echo $_SESSION['aluno']->responsavel ?>" disabled>
                                                            </div> 
                                                        </div>
                                                    </div>
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
                                                    <form  method="post" action="../models/alterar.php"
                                                    class="dropzone dropzone-custom needsclick add-professors"
                                                    id="demo1-upload">
                                                        <div class="form-group">
                                                            <input type="hidden" name="tpUsu" value="alu">
                                                        <label>Email</label>
                                                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $_SESSION['usuario']->email ?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Login</label>
                                                            <input type="text" class="form-control" name="login"
                                                                placeholder="Login" value="<?php echo $_SESSION['usuario']->login ?>" name="usuario" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Senha antiga</label>
                                                            <input type="password" class="form-control" placeholder="Senha Antiga" name="senhaAntiga">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Nova Senha</label>
                                                            <input type="password" class="form-control" placeholder="Senha Atual" name="novaSenha">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Confirme sua nova senha</label>
                                                            <input type="password" class="form-control" placeholder="Confirmar Senha" name="confirmarSenha">
                                                        </div>
                                                        </div>
                                                        <button type="submit"  class="btn btn-primary waves-effect waves-light">Enviar</button>
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