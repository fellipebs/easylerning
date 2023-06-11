<?php
session_start();
require_once('../models/conexao/conexao.php');
$sql = $con->prepare("SELECT id,nome,DATE_FORMAT(dt_nascimento,'%d/%m/%Y')as dt_nascimento,responsavel, usuario_id, status FROM aluno ORDER BY nome; ");
$sql->execute();
$rows = $sql->fetchAll(PDO::FETCH_CLASS);
require("../models/restrito.php");

require_once("../components/head.php");
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<body>
    <script>
        $(document).ready(function() {
            $('#listalunos').DataTable();
        });
    </script>

    <?php require_once("../components/menus.php"); ?>
    <div class="breadcome-area">
        <div class="container-fluid">
        </div>
    </div>
    </div>

    <div class="product-status mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <br>
                        <h4>Listagem De Alunos</h4>
                        <?php if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }

                        ?>
                        <div class="asset-inner">
                            <br>
                            <div class="row">
                                <div class="container">
                                    <table id="listalunos" class="table table-striped">
                                        <?php if (!empty($rows)) {
                                            echo ' 
                                <thead>
                                <tr>
                                <th scope="col">Código</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nascimento</th>
                                <th scope="col">Responsavel</th>
                                <th scope="col">Status</th>
                                <th scope="col">Operações</th>
                            </tr>
                            </thead>';
                                        } else {
                                            echo 'Alunos ainda não cadastrados!';
                                        }
                                        ?>

                                        <?php foreach ($rows as $row) : ?>
                                            <?php echo "<form action='editarAluno.php' method='post'>"; ?>
                                            
                                                <tbody>
                                                    <tr>
                                                        <td><?= $row->id ?></td>
                                                        <td><?= $row->nome ?></td>
                                                        <td><?= $row->dt_nascimento ?></td>
                                                        <td><?= $row->responsavel ?></td>
                                                        <?php if ($row->status == '1') {
                                                                echo "<td>Ativo</td>";
                                                            } else {
                                                                echo "<td>Inativo</td>";
                                                            } ?>
                                                        <td>
                                                            <button data-toggle="tooltip" title="Editar" class="pd-setting-ed"  value="<?= $row->id ?>" name='idAluno'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    </tr>
                                                </tbody>
                                            <?php endforeach; ?>
                                            </form>
                                            </td>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="custom-pagination">
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
