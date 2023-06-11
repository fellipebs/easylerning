<?php
session_start();
require_once('../models/conexao/conexao.php');
require("../models/restrito.php");
require_once("../components/head.php");
?>

<body>
    <?php require_once("../components/menus.php"); ?>
    <div class="breadcome-area">
        <div class="container-fluid">
            <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="basic-login-inner inline-basic-form">
                                    <form action="../models/receberalunoeditado.php">
                                        <div class="form-group-inner">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="Nome" />
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="data de nascimento" />
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <input type="text"
                                                        class="form-control basic-ele-mg-b-10 responsive-mg-b-10"
                                                        placeholder="Responsavel" />
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                    <button class="btn btn-sm btn-primary login-submit-cs"
                                                        type="submit">Cadastrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form> -->
            <!-- </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        </div>
    </div>
    </div>

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Listagens Disponíveis:</h4>
                        <?php if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }

                        ?>
                        
                        <div class='row'>
                        <div class='col-md-4'>
                        <center>
                        <label>Listagem de alunos</label><br>
                       <a href="listagemAlunos.php">
                       <img src='../assets/images/aluno1.png'>
                        </a>
                        </center>
                        </div>
                        <div class='col-md-4'>
                        <center>
                        <label>Listagem de aulas</label><br>
                        <a href="listagemAulas.php">
                        <img src='../assets/images/aulaicon.png'></a></div>
                        </center>
                        <div class='col-md-4'>
                        <center>
                        <label>Listagem de turmas</label><br>
                        <a href="listagemTurmas.php">
                        <img src='../assets/images/turmaicon.png'>
                        </a>
                        </center>
                        </div>
                        <div class="custom-pagination">
                            <!-- <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="../#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="../#">1</a></li>
                                <li class="page-item"><a class="page-link" href="../#">2</a></li>
                                <li class="page-item"><a class="page-link" href="../#">3</a></li>
                                <li class="page-item"><a class="page-link" href="../#">Next</a></li>
                            </ul> -->
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