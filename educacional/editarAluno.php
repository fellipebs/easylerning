<?php
session_start();
require_once('../models/conexao/conexao.php');
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <ul class="breadcome-menu">

                                </ul>
                            
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
                            <?php $alunoId = $_POST['idAluno'];
                            $sql = $con->prepare("select a.nome, a.dt_nascimento, a.responsavel, t.nome_turma, a.turma_id, a.status from aluno a inner join turma t on a.turma_id = t.id where a.id = ?;");
                            $sql->execute(array($alunoId));
                            $rows = $sql->fetchAll(PDO::FETCH_CLASS);

                            echo "<form action='recebeAlunoEditado.php' method='post'>";
                            echo "<input type='hidden' name='id' value='$alunoId'>";
                            foreach ($rows as $row) {
                                echo "<label> Nome: </label>";
                                echo "<input type='text' name='nome' value='$row->nome' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Data de nascimento: </label>";
                                echo "<input type='date' name='dt_nascimento' value='$row->dt_nascimento' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Responsável: </label>";
                                echo "<input type='text' name='responsavel' value='$row->responsavel' class='form-control' required>";
                                echo "<br>";
                                echo "<label> Turma: </label>";
                                echo "<select name='nome_turma' class='form-control'>";
                                echo "<option value='$row->turma_id'>$row->nome_turma</option>";
                                foreach ($turmas as $turma) {
                                    echo "<option value='$turma->id'>$turma->nome_turma</option>";
                                }
                                echo "</select>";
                                echo "<br>";
                            }
                            if ($row->status == 1) {
                                echo 'O usuário está ativo, para desativá-lo basta escolher a opção "Desativar":';
                                echo "<select name='status' class='form-control'>";
                                echo "<option value='1'>Ativar</option>
                                      <option value='0'>Desativar</option>";
                                echo "</select>";
                            } else {
                                echo 'O usuário está inativo, para ativá-lo basta escolher a opção "Ativar":';
                                echo "<select name='status' class='form-control'>";
                                echo "<option value='0'>Desativar</option>
                                      <option value='1'>Ativar</option>";
                                echo "</select>";
                            }

                            echo "<br><button class='btn btn-primary'>Finalizar a edição</button>";
                            echo "</form>";
                            ?>
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
    <?php require_once("../components/footer.php"); ?>
    <?php require_once("../components/js.php"); ?>
</body>

</html>