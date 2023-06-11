<?php
session_start();
require_once('../models/conexao/conexao.php');
require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
require_once("../components/head.php");
?>



<body>
    <script src="js/notificacao.js" type="text/javascript"></script>
    <?php require_once("../components/menus.php"); ?>
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
                                    <li><span class="bread-blod">Enviar notificações</span>

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
                            <table>
                                <?php if (isset($_SESSION['msg'])) {
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);
                                }
                                ?>
                                Utilize esta página para enviar notificações aos alunos!
                                <br><br>
                                <form action='rbnoti.php' method='post'>
                                    <?php echo "<input type='hidden' id='usu' name='usu' value=" . $_SESSION['usuario']->id . ">"  ?>
                                    <input type="checkbox" name="check" id='check' value="" class='' onclick='esconde()'>Selecione este checkbox para enviar a mensagem para todos da sala.<br>
                                    <div id='teste'>
                                        <br> Ou selecione o nome do aluno que você deseja notificar:

                                        <select name='aluno' class='form-control'>
                                            <option value=''></option>
                                            <?php

                                            $sql = $con->prepare("SELECT * from aluno");
                                            $sql->execute();

                                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);
                                            foreach ($rows as $row) {
                                                echo "<option value=" . $row->id . ">" . $row->nome . "</option>";
                                            }
                                            ?>



                                        </select>
                                    </div>
                                    Escreva aqui a mensagem que estara na notificação:
                                    <br>
                                    <textarea name="msg" class='form-control' required> </textarea>
                                    <br>
                                    <button type='submit' class='btn btn-primary'>Enviar notificação</button>

                                </form>
                            </table>
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
    <?php require_once("../components/footer.php"); ?>
    <?php require_once("../components/js.php"); ?>
</body>

</html>