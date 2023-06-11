<?php
session_start();
require_once('../models/conexao/conexao.php');
//require_once('../models/restrito/VerificarSeLogadoProfessor1.php');
require_once("../components/head.php");
$sql = $con->prepare("SELECT * FROM turma;");
$sql->execute();
$turmas = $sql->fetchAll(PDO::FETCH_CLASS);
?>



<body>
    <script src="js/notificacao.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/listagemNotas.css">
    <?php require_once("../components/menus.php"); ?>
    <div class="breadcome-area">
        <div class="container-fluid">

            <div class="row">
       
    </div>
    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">


                        <div class="asset-inner">
                            <?php $turmaId = $_POST['idTurma'];
                            $sql = $con->prepare("select * from turma where id = ?");
                            $sql->execute(array($turmaId));
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);

                            echo "<form action='recebeTurmaEditada.php' method='post'>";
                            echo "<input type='hidden' name='id' value='$turmaId'>";
                            foreach ($rows as $row) {
                                echo "<label> Nome: </label>";
                                echo "<input type='text' name='nome' value='$row->nome_turma' class='form-control' required>";
                                echo "<br>";
                            if ($row->status == 1) {
                                echo '<label>A turma está ativa, para desativá-lo basta escolher a opção "Desativar":</label>';
                                echo "<select name='status' class='form-control'>";
                                echo "<option value='1'>Ativar</option>
                                      <option value='0'>Desativar</option>";
                                echo "</select>";
                            } else {
                                echo '<label>A turma está inativo, para ativá-lo basta escolher a opção "Ativar":</label>';
                                echo "<select name='status' class='form-control'>";
                                echo "<option value='0'>Desativar</option>
                                      <option value='1'>Ativar</option>";
                                echo "</select>";
                            }
                        }
                            echo "<br><button class='btn btn-primary'>Finalizar a edição</button>";
                            echo "</form>";
                            ?>
                        </div>
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