<?php
session_start();
//require_once('../models/restrito/VerificarSeLogadoAluno1.php');
require_once('../models/conexao/conexao.php');
require_once("../components/head.php");

require_once('../models/conexao/conexao.php');
$sql = $con->prepare("SELECT nome,sobrenome FROM professor where usuario_id = ?;");
$sql->execute(array($_SESSION['usuario']->id));
$rows = $sql->fetchAll(PDO::FETCH_CLASS);

?>

<body>
    <?php require_once("../components/menus.php"); ?>
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
                                    <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Editar informações de professor.</span>
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
            <?php if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-payment-inner-st">
                        <ul id="myTabedu1" class="tab-review-design">
                            <!-- <li class="active"><a href="#description">Edite Informações básicas</a></li> -->
                            <li><a href="#reviews"> Edite Informações da conta</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="description">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <div id="dropzone1" class="pro-ad">
                                            <form method="post" action="../models/alterar.php" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <?php foreach ($rows as $aux) { ?>

                                                                <div class="form-group">
                                                                    <label>Nome</label>
                                                                    <input name="nome" type="text" class="form-control" placeholder="Nome" value="<?= $aux->nome ?>">
                                                                </div>
                                                                <label>Sobrenome</label>
                                                                <div class="form-group">
                                                                    <input name="sobrenome" type="text" class="form-control" placeholder="Sobrenome" value="<?= $aux->sobrenome ?>">
                                                                </div>
                                                            <div class="form-group">
                                                                <label for="email">Endereço de Email: </label>
                                                                <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="<?php echo $_SESSION['usuario']->email ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="senhaAntiga">Senha: </label>
                                                                <input id="senhaAntiga" type="password" class="form-control" placeholder="Senha Antiga" name="senhaAntiga" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="novaSenha">Nova Senha: </label>
                                                                <input id="novaSenha" type="password" class="form-control" placeholder="Nova Senha" name="novaSenha" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="confirmarSenha">Confirmar Senha: </label>
                                                                <input id="confirmarSenha" type="password" class="form-control" placeholder="Confirmar Senha" name="confirmarSenha" required>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../components/footer.php"); ?>
    <?php require_once("../components/js.php"); ?>


</body>

</html>