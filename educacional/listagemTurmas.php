<?php
session_start();
require_once('../models/conexao/conexao.php');

$sql = $con->prepare("SELECT T.id, T.nome_turma, T.escola_id_turma, E.nome, T.status FROM turma as T JOIN escola as E on T.escola_id_turma = E.id;");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
require("../models/restrito.php");
require_once("../components/head.php");


?>

<body>
    <?php require_once("../components/menus.php"); ?>

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <br><h4>Listagem De Turmas</h4>
                        <?php if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>


                        <div class="container">
                            <br><br>
                            <table  class="table table-striped">
                                <?php if (!empty($rows)) {
                                    echo '<tr>
                                <th>Nome da turma</th>
                                    <th>Número de alunos</th>
                                    <th>Estado da turma</th>
                                    <th>Operações</th>
                                    
                                </tr>';
                                } else {
                                    echo 'Turmas ainda não cadastradas!';
                                }
                                ?>


                                <?php foreach ($rows as $row) : ?>
                                    <form action='editarTurma.php' method='post'>
                                        <input type='hidden' value="<?= $row->id ?>" name='idTurma'>
                                        <tr>
                                            <td><?= $row->nome_turma ?></td>
                                            <?php
                                                $sql = $con->prepare("select count(*) as conta from aluno where turma_id = $row->id;");
                                                $sql->execute();
                                                $linhaTurma = $sql->fetchAll(PDO::FETCH_CLASS);
                                                foreach ($linhaTurma as $linhaTurmas) {
                                                    echo '<td>' . $linhaTurmas->conta . '</td>';
                                                }
                                                ?>

                                            <td><?php if ($row->status == 1) {
                                                        echo 'Ativa';
                                                    } else {
                                                        echo 'Inativa';
                                                    } ?></td>
                                            <td>
                                                <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                            </table>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once("../components/footer.php"); ?>
    <?php require_once("../components/js.php"); ?>
